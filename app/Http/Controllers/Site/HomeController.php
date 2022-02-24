<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchTipRequest;
use App\Models\Vehicle;
use App\Models\Tip;
use App\Models\VehicleBrand;

class HomeController extends Controller
{
    public function index(SearchTipRequest $request)
    {
        $vehicles = Vehicle::get();

        $tips = Tip::search($request);

        return view('site.home', compact('vehicles', 'tips'));
    }
}
