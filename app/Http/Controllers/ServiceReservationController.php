<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceManReservation;

class ServiceReservationController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->input('period', 'morning'); // Default to morning if no period is specified
        $services = ServiceManReservation::whereHas('period', function ($query) use ($period) {
            $query->where('period', $period);
        })->get();
        return view('front.package', compact('services', 'period'));
    }

    public function show(Request $request)
    {
        $service = ServiceManReservation::find($request->service_id);
        
        return view('front.user-reservation', compact('service'));
    }
}
