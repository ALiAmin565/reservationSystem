<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceManReservation;

class ServiceReservationController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->input('period', 'morning'); // Default to morning if no period is specified
        $time =  $request->input('time'); // Default to 8:00 AM if no time is specified
        if ($time == null) {
            $services = ServiceManReservation::whereHas('period', function ($query) use ($period) {
                $query->where('period', $period);
            })->get();
        } else {
            $services = ServiceManReservation::whereHas('period', function ($query) use ($period) {
                $query->where('period', $period);
            })->whereHas('time', function ($query) use ($time) {
                $query->where('time', $time);
            })->get();
        }
        return view('front.package', compact('services', 'period', 'time'));
    }

    public function show(Request $request)
    {
        $service = ServiceManReservation::find($request->service_id);

        return view('front.user-reservation', compact('service'));
    }
}
