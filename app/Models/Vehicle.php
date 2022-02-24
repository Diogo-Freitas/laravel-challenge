<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle'
    ];

    public function brands()
    {
        return $this->belongsToMany(VehicleBrand::class, 'vehicle_vehicle_brand', 'vehicle_id', 'brand_id');
    }

    public function models()
    {
        return $this->hasMany(VehicleModel::class);
    }
}
