<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->vehicle_id = $request->vec_id;
        $contact->save();
        return redirect()->route('veh_accept');
    }
}
