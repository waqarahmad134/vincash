<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\Contact;
use App\Models\User;
use App\Models\VehicleImage;
use App\Models\AdminEmail;
use App\Models\VehicleOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use Helper;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Log;


class VehicleController extends Controller
{
    
    public function add_new_vehicle(Request $request)
    {
   
        $vehicle = new Vehicle;
        $vehicle->vin_number = $request->vin_number;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->make = $request->make;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->trim = $request->trim;
        $vehicle->km = $request->kms;
        $vehicle->postal_code = $request->postal_code;
        $vehicle->vec_exterior_color = $request->exterior_color;
        if($request->replace == "on")
        {
            $vehicle->replacing = "yes";
        }
        else
        {
            $vehicle->replacing = "no";
        }
        
        $vehicle->pay_off_bank = $request->payoff_bank;
        $vehicle->lease_company = $request->lease;
        $vehicle->repair_cost = $request->repair;
        $vehicle->damage_history = $request->damage;
        
        $vehicle->save();
        
        foreach($request->select as $sel)
        {
            $option = new VehicleOption;
            $option->option = $sel;
            $option->vehicle_id = $vehicle->id;
            $option->save();
        }
        
        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->vehicle_id = $vehicle->id;
        $contact->city = $request->city;
        $contact->payment_method = $request->payment_method;
        
        $contact->save();
        
        
       
        foreach($request->files as $image)
           {
              
              foreach($image as $key=>$img)
              {
                $vecimage = new VehicleImage;
                $imageName = 'VehicleImage'.'-'.rand(10000,99999).'.'.$img->getClientOriginalExtension();
                $img->move(public_path('images'), $imageName);
                $vecimage->image = $imageName;
                $vecimage->vehicle_id = $vehicle->id;
                $vecimage->save();
                
              }
           }
           
        $admin_email = AdminEmail::latest()->first();
        
        $body = "New Query Recieved";
        $title = "New Query Recieved";
        $device_token = User::where('status',1)->where('user_type','admin')->first()->device_token;
        Helper::testnotification($body,$title,$device_token);
        
        
        //  try 
        //  {
            $options = VehicleOption::where('vehicle_id',$vehicle->id)->get();
            $data=array('vehicle'=>$vehicle,'vehicle_options'=>$options,'contact'=>$contact);
         
             
            Mail::send('mail', $data, function($message)use($vehicle,$admin_email,$contact) {
                $message->to($admin_email->admin_email);
                $message->subject('New Lead : '.$contact->first_name.' '.$contact->last_name);
            });

            return redirect()->route('veh_accept',[$vehicle])->with('msg','Contact Information Saved!');
        //  }
        //  catch (Throwable $exception) {
        //     return redirect()->route('veh_accept',[$vehicle])->with('msg','Contact Information Saved!');
        // }
        
        // return $vehicle;
       
    }
    
    
    
    public function vec_search(Request $request)
    {
      
        $vehicle = Vehicle::where('vin_number',$request->vin_num)->get();
      
        if($vehicle->count() > 1)
        {
           return view('veh_multi',['vec'=>$vehicle]);
        }
        if($vehicle->count() == 1 )
        {
            return redirect()->route('veh_info',[$vehicle[0]]);
        //   return view('veh_info',['vec'=>$vehicle]);
        }
        if($vehicle->count()==0)
        {
            $request->session()->put('vin_number', $request->vin_num);
            $request->session()->put('kms', $request->km);
            $request->session()->put('postal_code', $request->postal_code);
            // return redirect()->route('veh_not')->with('vin_number',$request->vin_num)->with('kms',$request->km)->with('postal_code',$request->postal_code);
            return redirect()->route('veh_not');
        }
    }
    public function add_vehicle_info(Request $request)
    {
       $validator = Validator::make($request->all(), [
        'vehicle_type' => 'required',
       
        'make' => 'required',
        'model' => 'required',
        'year' => 'required',
        'kms' => 'required',
        'trim' => 'required',
        'postal_code' => 'required',
    ]);
    
    if ($validator->fails()) {
        // For example:
        return redirect()->back()
                ->withErrors($validator)
                ->withInput();
 
        // Also handy: get the array with the errors
        $validator->errors();
 
        // or, for APIs:
        $validator->errors()->toJson();
    }
    
        $vehicle = new Vehicle;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->vin_number = $request->vin_number;
        $vehicle->make = $request->make;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->km = $request->kms;
        $vehicle->trim = $request->trim;
        $vehicle->postal_code = $request->postal_code;
        $vehicle->save();
        // session()->put('vehicle',$vehicle);
        
        return redirect()->route('veh_info',[$vehicle]);
        
    }
    
    public function vec_info($vehicle)
    {
        $vec = Vehicle::find($vehicle);
        return view('veh_info',['vec'=>$vec]);
    }
    
    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'city' => 'required',
        'exterior_color' => 'required',
       
    ]);
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
        $vec = Vehicle::find($request->vec_id);
       //Delete previous options
        foreach($vec->option as $option)
        {
            $option->delete();
        }
        $vec->vec_exterior_color = $request->exterior_color;
        
        $vec->pay_off_bank = $request->payoff_bank;
        $vec->lease_company = $request->lease;
        $vec->repair_cost = $request->repair;
        $vec->damage_history = $request->damage;
        
        if($request->replace == "on")
        {
            $vec->replacing = "yes";
        }
        else
        {
            $vec->replacing = "no";
        }
        $vec->save();
        foreach($request->select as $sel)
        {
            $option = new VehicleOption;
            $option->option = $sel;
            $option->vehicle_id = $request->vec_id;
            $option->save();
        }
        
        //VEHICLE IMAGES
       
        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->vehicle_id = $request->vec_id;
        $contact->city = $request->city;
        $contact->payment_method = $request->payment_method;
        
        $contact->save();
        $vehicle = $request->vec_id;
        
        
    foreach($request->files as $image)
       {
          foreach($image as $key=>$img)
          {
            $vecimage = new VehicleImage;
            $imageName = 'VehicleImage'.'-'.rand(10000,99999).'.'.$img->getClientOriginalExtension();
            $img->move(public_path('images'), $imageName);
            $vecimage->image = $imageName;
            $vecimage->vehicle_id = $request->vec_id;
            $vecimage->save();
          }
       }
       
       
        
        $admin_email = AdminEmail::latest()->first();
        $body = "New Query Recieved";
        $title = "New Query Recieved";
        $device_token = User::where('status',1)->where('user_type','admin')->first()->device_token;
        Helper::testnotification($body,$title,$device_token);
        
        $data=array('vehicle'=>$vec);
        
        $options = VehicleOption::where('vehicle_id',$vec->id)->get();
        $data=array('vehicle'=>$vec,'vehicle_options'=>$options,'contact'=>$contact);
        
      
         try {
           Mail::send('mail', $data, function($message)use($vec,$admin_email,$contact) {
                $message->to($admin_email->admin_email);
                $message->subject('Vec ID'.' '.$vec->id.' '.'is added now!');
            });
            return redirect()->route('veh_accept',[$vehicle])->with('msg','Contact Information Saved!');
         }
         catch (Throwable $exception) {
            return "An error occurred: " . $exception->getMessage();
            // return redirect()->route('veh_accept',[$vehicle])->with('msg','Contact Information Saved!');
        }
            
        
        
       
    }
    
    public function vec_accept($vehicle)
    {
        $vec = Vehicle::find($vehicle);
        return view('veh_accept',['vec'=>$vec]);
    }
    

}
