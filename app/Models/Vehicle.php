<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    
    public function option(){
        return $this->hasMany(VehicleOption::class,'vehicle_id');
    }
    
    public function user()
    {
        return $this->hasOne(Contact::class,'vehicle_id');
    }
    
    public function vehicleimage()
    {
        return $this->hasMany(VehicleImage::class,'vehicle_id');
    }
    
    public function card()
    {
        return $this->hasOne(Card::class,'vehicle_id');
    }
    
    public function timestamp()
    {
        return $this->hasOne(TimeStamp::class,'vehicle_id');
    }
}
