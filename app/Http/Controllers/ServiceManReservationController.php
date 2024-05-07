<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Models\DeterminedTime;
use App\Models\Nationality;
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
        $nationalities = Nationality::all();
        return view('dashboard.package.create', compact('periods', 'times', 'nationalities'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'service_name' => 'required|string',
        //     'price' => 'required|numeric',
        //     'discount' => 'nullable|numeric',
        //     'number_of_visits' => 'required|int',
        //     'period_id' => 'required|int',
        //     'time_id' => 'required|int',
        //     'number_of_man_services' => 'nullable|int',
        //     // 'active' => 'required|boolean',
        //     'number_days' => 'required|int',
        //     'service_charge' => 'nullable|numeric'
        // ]);

        $reservation = new ServiceManReservation($request->all());
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
    public function edit($id)
    {
        $reservation = ServiceManReservation::findOrFail($id);
        $periods = Period::all();
        $times = DeterminedTime::all();
        $nationalities = Nationality::all();
        return view('dashboard.package.edit', compact('reservation', 'periods', 'times','nationalities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reservation = ServiceManReservation::findOrFail($id);
        $reservation->update($request->all());
        return redirect()->route('reservations-admin.index')->with('success', 'Reservation updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation = ServiceManReservation::findOrFail($id);
        $reservation->delete();  // Soft delete the reservation
        return redirect()->route('reservations-admin.index')->with('success', 'Reservation deleted successfully!');
    }
}
