<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Setting;
use App\Models\DealerVehicle;
use App\Models\Faq;
use App\Models\SoldVehicle;
use App\Models\Card;
use App\Models\TimeStamp;
use App\Models\Message;
use App\Models\AdminEmail;
use App\Models\User;
use App\Models\Memo;
use Hash;
use Carbon\Carbon;
use Auth;

class AdminController extends Controller
{
    public function memo()
    {
        $memo = Memo::orderBy('id', 'DESC')->get();
        return view('admin.memo', ['memo' => $memo]);
    }
    public function send_memo(Request $request)
    {
        $new = new Memo;
        $new->dealer_id = Auth::user()->id;
        $new->message = $request->message;
        $new->save();
        return redirect()
            ->back()
            ->with('info', 'Memo sent successfully!');
    }
    public function admin_email()
    {
        return view("admin.admin_email");
    }

    public function admin_email_post(Request $request)
    {
        // $admin = User::where('user_type','admin')->first();
        // $check = User::where('user_type','dealer')->where('email',$request->email)->get();
        // if($check->count()>0)
        // {
        //     return redirect()->back()->with('error','Email Already registered for Dealer');
        // }
        // $admin->email = $request->email;
        // $admin->save();
        // return redirect()
        //         ->back()
        //         ->with('info', 'Admin Email added Successfully!');
        
        $check = AdminEmail::latest()->first();
        if ($check)
        {
            $check->admin_email = $request->email;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'Admin Email added Successfully!');
        }
        else
        {
            $new = new AdminEmail;
            $new->admin_email = $request->email;
            $new->save();
            return redirect()
                ->back()
                ->with('info', 'Admin Email added Successfully!');
        }
    }

    public function change_email(Request $request)
    {
        // return $request->all();
        if ($request->new_email == $request->c_new_email)
        {
            $user = Auth::user();
            $user->email = $request->new_email;
            $user->save();
            return true;
        }
        else
        {
            return false;
        }

    }
    public function dealer_buy_vehicles()
    {
        $vehicles = SoldVehicle::where('dealer_id', Auth::user()->id)
            ->get();
        return view('admin.dealer_buy_vehicles', ['vehicles' => $vehicles]);
    }
    public function buy_vehicle(Request $request)
    {

        $check = SoldVehicle::where('vehicle_id', $request->vec_id)
            ->where('dealer_id', Auth::user()
            ->id)
            ->where('payment_method', $request->payment_method)
            ->first();
        if ($check)
        {
            return response()->json(['status' => 'sold']);
        }
        else
        {
            $sold = new SoldVehicle();
            $sold->vehicle_id = $request->vec_id;
            $sold->dealer_id = Auth::user()->id;
            $sold->payment_method = $request->payment_method;
            $sold->save();

            $check = TimeStamp::where('vehicle_id', $request->vec_id)
                ->first();

            if ($check)
            {
                $check->buy_vehicle = Carbon::now();
                $check->save();
            }
            else
            {
                $time = new TimeStamp();
                $time->vehicle_id = $request->vec_id;
                $time->buy_vehicle = Carbon::now();
                $time->save();
            }
            $vehicle = Vehicle::find($request->vec_id);
            $vehicle->sold = 1;
            $vehicle->save();
            $dealer = DealerVehicle::where('vehicle_id', $request->vec_id)
                ->get();
            foreach ($dealer as $del)
            {
                $del->delete();
            }
            return response()
                ->json(['status' => 'ok']);
        }

    }

    public function buy_veh()
    {
        $vehicles = SoldVehicle::all();
        
        return view('admin.buy_veh', ['cards' => $vehicles]);
    }
    public function add_card_info(Request $request)
    {
        $check = Card::where('vehicle_id', $request->vec_id)
            ->where('dealer_id', Auth::user()
            ->id)
            ->first();
        if ($check)
        {
            $check->card_no = $request->card_no;
            $check->amount = $request->amount;
            $check->exp_date = $request->expiry_date;
            $check->name = $request->name;
            $check->security_code = $request->security_code;
            $check->save();
            return true;
        }
        else
        {
            $card = new Card;
            $card->card_no = $request->card_no;
            $card->amount = $request->amount;
            $card->exp_date = $request->expiry_date;
            $card->name = $request->name;
            $card->security_code = $request->security_code;
            $card->vehicle_id = $request->vec_id;
            $card->dealer_id = Auth::user()->id;
            $card->save();
            return true;
        }
    }

    public function change_password(Request $request)
    {
        $user = Auth::user();
        if ($request->new_password == $request->confirm_password)
        {
            if (Hash::check($request->old_password, $user->password))
            {
                $user->password = Hash::make($request->new_password);
                $user->save();
                return redirect()
                    ->back()
                    ->with('info', 'Password Updates successfully!');
            }
            else
            {
                return redirect()->back()->with('error', 'Invalid Old Password!');
            }
        }
        return redirect()
            ->back()
            ->with('error', 'Password Confirmation mismatch');
    }

    public function change_dealer_password(Request $request)
    {

        $user = User::find($request->dealer_id);
        if ($request->new_password == $request->confirm_password)
        {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return true;
        }
        else
        {
            return false;
        }
    }

    public function admin_home()
    {
        $vehicles = Vehicle::where('status', 1)->get();
        $dealers = User::where('user_type', 'dealer')->where('status', 1)
            ->get();
        $messages = Message::all();
        $faqs = Faq::all();
        return view('admin.home', ['vehicles' => $vehicles, 'dealers' => $dealers, 'messages' => $messages, 'faqs' => $faqs]);
    }
    public function all_vehicles()
    {
        $vehicles = Vehicle::where('status',1)->get();
        $dealervec = DealerVehicle::all();
        $dealers = User::where('user_type', 'dealer')->where('status', 1)
            ->get();

        return view('admin.all_vehicles', ['vehicles' => $vehicles, 'dealers' => $dealers, 'dealervec' => $dealervec]);
    }

    public function active_vec($id)
    {
        $vec = Vehicle::find($id);
        $vec->status = 1;
        $vec->save();
        return redirect()
            ->back()
            ->with('info', 'Vehicle Activated!');
    }
    public function block_vec($id)
    {
        $vec = Vehicle::find($id);
        $vec->status = 0;
        $vec->save();
        return redirect()
            ->back()
            ->with('error', 'Vehicle Deleted!');
    }

    public function delete_vehicle($id)
    {
        $vec = Vehicle::find($id);
        $vec->status = 0;
        $vec->save();
        return redirect()->back()->with('error', 'Vehicle Deleted Successfully!');
    }

    public function about_us(Request $request)
    {
        $check = Setting::where('title', 'about_us')->first();
        if ($check)
        {
            $check->description = $request->about_us;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'About Section Updated!');
        }
        else
        {
            $setting = new Setting;
            $setting->title = 'about_us';
            $setting->description = $request->about_us;
            $setting->save();
            return redirect()
                ->back()
                ->with('info', 'About Section Updated!');
        }

    }
    public function about_us_footer(Request $request)
    {
        $check = Setting::where('title', 'about_us_footer')->first();
        if ($check)
        {
            $check->description = $request->about_us;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'About Section Updated!');
        }
        else
        {
            $setting = new Setting;
            $setting->title = 'about_us_footer';
            $setting->description = $request->about_us;
            $setting->save();
            return redirect()
                ->back()
                ->with('info', 'About Section Updated!');
        }

    }
    public function title(Request $request)
    {
        $check = Setting::where('title', 'title')->first();
        if ($check)
        {
            $check->description = $request->title;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'title Section Updated!');
        }
        else
        {
            $setting = new Setting;
            $setting->title = 'title';
            $setting->description = $request->title;
            $setting->save();
            return redirect()
                ->back()
                ->with('info', 'title Section Updated!');
        }

    }
    public function footer(Request $request)
    {
        $check = Setting::where('title', 'footer')->first();
        if ($check)
        {
            $check->description = $request->footer;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'footer Section Updated!');
        }
        else
        {
            $setting = new Setting;
            $setting->title = 'footer';
            $setting->description = $request->footer;
            $setting->save();
            return redirect()
                ->back()
                ->with('info', 'footer Section Updated!');
        }

    }
    public function logo(Request $request)
    {
        $check = Setting::where('title', 'logo')->first();
        if ($check)
        {
            $imageName = time() . '.' . $request
                ->logo
                ->extension();
            $request
                ->logo
                ->move(public_path('images') , $imageName);
            $check->description = $imageName;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'logo Section Updated!');
        }
        else
        {
            $setting = new Setting;
            $setting->title = 'logo';
            $imageName = time() . '.' . $request
                ->logo
                ->extension();
            $request
                ->logo
                ->move(public_path('images') , $imageName);
            $setting->description = $imageName;
            $setting->save();
            return redirect()
                ->back()
                ->with('info', 'logo Section Updated!');
        }

    }
    public function footer_logo(Request $request)
    {
        $check = Setting::where('title', 'footer_logo')->first();
        if ($check)
        {
            $imageName = 'Footer-Logo' . time() . '.' . $request
                ->logo
                ->extension();
            $request
                ->logo
                ->move(public_path('images') , $imageName);
            $check->description = $imageName;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'logo Section Updated!');
        }
        else
        {
            $setting = new Setting;
            $setting->title = 'footer_logo';
            $imageName = 'Footer-Logo' . time() . '.' . $request
                ->logo
                ->extension();
            $request
                ->logo
                ->move(public_path('images') , $imageName);
            $setting->description = $imageName;
            $setting->save();
            return redirect()
                ->back()
                ->with('info', 'Footer Logo Section Updated!');
        }

    }

    public function phone()
    {
        return view('admin.phone');
    }
    public function phone_post(Request $request)
    {
        $check = Setting::where('title', 'phone')->first();
        if ($check)
        {
            $check->description = $request->title;
            $check->save();
            return redirect()
                ->back()
                ->with('info', 'phone Section Updated!');
        }
        else
        {
            $setting = new Setting;
            $setting->title = 'phone';
            $setting->description = $request->title;
            $setting->save();
            return redirect()
                ->back()
                ->with('info', 'phone Section Updated!');
        }

    }

    public function register(Request $request)
    {
        $check = User::where('email', $request->email)
            ->first();
        if ($check)
        {
            return redirect()->back()
                ->with('error', 'Email already exist');
        }
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->user_type = 'admin';
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('home');

    }
    public function add_dealer(Request $request)
    {
        $check = User::where('email', $request->email)
            ->first();
        if ($check)
        {
            return redirect()->back()
                ->with('error', 'Email already exist');
        }
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->postal_code = $request->zip;
        $user->phone = $request->phone;
        $user->dealer_company = $request->dealer_company;
        $user->user_type = 'dealer';
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()
            ->back()
            ->with('info', 'Dealer added Successfully');

    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
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
                    ->with('error', 'Password Mismatch');
            }
        }
        else
        {
            return redirect()
                ->back()
                ->with('error', 'Email does not exist');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }

    public function add_price(Request $request)
    {

        $vec = Vehicle::find($request->vec_id);
        $vec->est_price = $request->est_price;
        $vec->demand_price = $request->demand_price;
        $vec->save();
        return $vec;
    }

    public function veh_details($id)
    {
        $vec = Vehicle::find($id);
        return view('admin.veh_details', ['vec' => $vec]);
    }

    public function admin_faq(Request $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()
            ->back()
            ->with('info', 'Faq Updated Successfully');
    }

    public function delete_faq($id)
    {
        $faq = Faq::find($id);
        $faq->status = 0;
        $faq->save();
        return redirect()
            ->back()
            ->with('error', 'Faq deleted Successfully!');
    }

    public function assign_dealer(Request $request)
    {

        $dealers = DealerVehicle::where('vehicle_id', $request->vec_id)
            ->get();
        foreach ($dealers as $dealer)
        {
            $dealer->delete();
        }

        if ($request->arr != null)
        {
            foreach ($request->arr as $dealer)
            {
                $vec = new DealerVehicle;
                $vec->dealer_id = $dealer;
                $vec->vehicle_id = $request->vec_id;
                $vec->save();
            }
        }

        $check = TimeStamp::where('vehicle_id', $request->vec_id)
            ->first();
        if ($check)
        {
            $check->assign_dealer = Carbon::now();
            $check->save();
        }
        else
        {
            $time = new TimeStamp();
            $time->vehicle_id = $request->vec_id;
            $time->assign_dealer = Carbon::now();
            $time->save();
        }

        return true;
    }

    public function get_dealers(Request $request)
    {
        $dealers = DealerVehicle::where('vehicle_id', $request->vec_id)
            ->get();
        return $dealers;
    }

    public function dealer_vehicles()
    {
        $dealervec = DealerVehicle::where('dealer_id', Auth::user()->id)
            ->get()
            ->pluck('vehicle_id')
            ->toArray();
        $vehicles = Vehicle::whereIn('id', $dealervec)->where('status', 1)
            ->where('sold', 0)
            ->get();
        $dealers = User::where('user_type', 'dealer')->get();
        return view('admin.dealer_vehicles', ['vehicles' => $vehicles, 'dealers' => $dealers]);

    }

    public function get_faq()
    {
        $faqs = Faq::where('status', 1)->get();
        return view('admin.faq', ['faqs' => $faqs]);
    }
}

