<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldVehicle extends Model
{
    use HasFactory;
    
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }
    
    public function dealer()
    {
        return $this->belongsTo(User::class,'dealer_id');
    }
}
