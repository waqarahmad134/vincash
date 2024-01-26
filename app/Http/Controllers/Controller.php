<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\User;
use Helper;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    public function saveToken(Request $request){
        $user = User::find(auth()->user()->id);
        $user->device_token = $request->token;
        if($user->save()){
            return response()->json(['token saved successfully.']);
        }
        return response()->json(['token not saved successfully.']);
    }
    
    public function test_notification(Request $request){
        $body = $request->body;
        $title = $request->title;
        $device_token = $request->device_token;
        return Helper::testnotification($body,$title,$device_token);
    }
}
