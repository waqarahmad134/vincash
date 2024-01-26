<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleOption extends Model
{
    use HasFactory;
    
    public function option()
    {
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }
}
