<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;
use App\Models\DeterminedTime;
use App\Models\ServiceManReservation;

class ServiceManReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = ServiceManReservation::all();
        return view('dashboard.package.index', compact('reservations'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periods = Period::all();
        $times = DeterminedTime::all();
        return view('dashboard.package.create', compact('periods', 'times'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_name' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'number_of_visits' => 'required|int',
            'period_id' => 'required|int',
            'time_id' => 'required|int',
            'number_of_man_services' => 'nullable|int'
        ]);
    
        $reservation = new ServiceManReservation($validated);
        $reservation->save();
    
        return redirect()->route('reservations-admin.index')->with('success', 'Reservation created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceManReservation $serviceManReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceManReservation $serviceManReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceManReservation $serviceManReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceManReservation $serviceManReservation)
    {
        //
    }
}
