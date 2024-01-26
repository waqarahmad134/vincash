<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DealerController extends Controller
{
    public function dealers()
    {
        $dealers = User::where('user_type','dealer')->where('status',1)->get();
        return view('admin.dealers',['dealers'=>$dealers]);
    }
    
    public function delete_dealer($id)
    {
        $user = User::find($id);
        $user->status = 0;
        $user->save();
        return redirect()->back()->with('error','Dealer Deleted Successfully');
    }
    
    public function active_dealer($id)
    {
        $dealer = User::find($id);
        $dealer->status = 1;
        $dealer->save();
        return redirect()->back()->with('info','Dealer Active Successfully');
        
    }
    public function block_dealer($id)
    {
        $dealer = User::find($id);
        $dealer->status = 0;
        $dealer->save();
        return redirect()->back()->with('error','Dealer deleted Successfully');
        
    }
}
