<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'brand_id',
        'model_id',
        'version',
        'tip',
    ];

    public static function search($request)
    {
        return Tip::with('brand')->with('model')->where(function ($query) use ($request) {

            if ($request->vehicle) {
                $query->where('vehicle_id', $request->vehicle);
            }
            if ($request->input('version')) {
                $query->where('version', 'LIKE', '%' . $request->input('version') . '%');
            }

            if ($request->input('brand')) {
                $query->whereHas('brand', function ($query) use ($request) {
                    $query->where('brand', 'LIKE', '%' . $request->input('brand') . '%');
                });
            }

            if ($request->input('model')) {
                $query->whereHas('model', function ($query) use ($request) {
                    $query->where('model', 'LIKE', '%' . $request->input('model') . '%');
                });
            }
        })
            ->orderBy('id', 'desc')
            ->paginate(50)
            ->withQueryString();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(VehicleBrand::class);
    }

    public function model()
    {
        return $this->belongsTo(VehicleModel::class);
    }
}
