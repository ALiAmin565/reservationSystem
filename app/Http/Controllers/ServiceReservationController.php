<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ServiceManReservation;

class ServiceReservationController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->input('period', 'morning'); // Default to morning if no period is specified
        $time =  $request->input('time'); // Default to 8:00 AM if no time is specified
        $cities = city::all();  
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
        return view('front.package', compact('services', 'period', 'time' , 'cities'));
    }

    public function show(Request $request)
    {
        $userService=UserService::where('reservation_id' ,$request->service_id )->where('user_id',Auth::user()->id)->get()->count();
        // if($userService>0){
        //     return back()->with('error','لقد قمت بحجز هذه الخدمة من قبل ');
        // }else{
            $service = ServiceManReservation::find($request->service_id);
            $cities = city::all();  
            return view('front.user-reservation', compact('service','cities'));
        // }
    }
}
