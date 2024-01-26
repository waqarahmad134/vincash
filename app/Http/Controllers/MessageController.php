<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function messages()
    {
        $messages = Message::all();
        return view('admin.messages',['messages'=>$messages]);
    }
    
    public function delete_message($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->back()->with('info','Message Deleted!');
    }
}
