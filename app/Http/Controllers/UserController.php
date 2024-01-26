<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Message;
use Hash;
use Auth;
use Mail;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function dealer_register(Request $request)
    {
        $validator = Validator::make($request->all() , ['first_name' => 'required', 'last_name' => 'required', 'dealer_company' => 'required', 'city' => 'required', 'state' => 'required', 'zip' => 'required', 'email' => 'required', 'phone' => 'required', 'password' => 'required|confirmed']);

        if ($validator->fails())
        {
            return redirect()
                ->back()
                ->withErrors($validator)->withInput();
        }
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->dealer_company = $request->dealer_company;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->email = $request->email;
        $user->user_type = 'dealer';
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()
            ->route('login');
    }

    public function dealer_login(Request $request)
    {
        $validator = Validator::make($request->all() , ['email' => 'required', 'password' => 'required']);
        if ($validator->fails())
        {
            return redirect()
                ->back()
                ->withErrors($validator)->withInput();
        }
        $user = User::where('email', $request->email)
            ->where('user_type', 'dealer')
            ->where('status', 1)
            ->first();
        if ($user)
        {
            if (Hash::check($request->password, $user->password))
            {
                Auth::login($user);
                return redirect()->route('home');
            }
            else
            {
                return redirect()
                    ->back()
                    ->with('msg', 'Wrong Credentials');
            }
        }
        else
        {
            return redirect()
                ->back()
                ->with('msg', 'Dealer not found!');
        }
    }

    public function send_message(Request $request)
    {
        $contact = new Message;
        $contact->full_name = $request->full_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->zip = $request->zip;
        $contact->message = $request->message;
        if ($contact->save())
        {
            $data = array(
                'data' => $contact
            );
            Mail::send('sendMessage', $data, function ($message)
            {
                $message->to("sigidevelopers@gmail.com");
                $message->subject('Message Sent!');
            });
            return true;
        }
        else
        {
            return false;
        }
    }

    // ************************* PASSWORD RESET ****************************
    public function forgot_password_post(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert(['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now() ]);
        Mail::send('forget_password_mail', ['token' => $token], function ($message) use ($request)
        {
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        return redirect()->back()->with('warning', 'We have e-mailed your password reset link!');
    }
    
     // ************************* PASSWORD RESET ****************************
    public function reset_password(Request $request)
    {
        // $request->validate([
        //     'token' => 'required',
        //     'new_password' => 'required|min:6|confirmed',
        // ]);
    
        // Find the user based on the token
        $reset = DB::table('password_resets')->where('token', $request->token)->first();
    
        if (!$reset) {
            return redirect()->back()->with('error', 'Invalid token.');
        }
    
        // Find the user by the token and update the password
        $user = User::where('email', $reset->email)->first();
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        // Delete the password reset record
        DB::table('password_resets')->where('token', $request->token)->delete();
    
        return redirect()->route('logins')->with('success', 'Password updated successfully. You can now log in with your new password.');
    }
}

