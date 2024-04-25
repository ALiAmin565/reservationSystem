<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Models\ServiceManReservation;

class UserServiceController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'city' => 'required|string',
            'street_name' => 'required|string',
            'building_number' => 'required|integer',
            'floor_number' => 'nullable|integer',
            'house_number' => 'required|integer',
            'full_address' => 'required|string',
            'phone_number' => 'required|string',
            'user_id' => 'required|integer',
            'reservation_id' => 'required|integer',
            'first_time' => 'required|date',
            'payment_method' => 'required|string',
            // Add more validation rules as needed
        ]);
        // Create a transaction id and pass it into userService 
        $validated['transaction_id'] = rand(100000, 999999);
        // Store the data in the database
        $UserService = UserService::create($validatedData);

        $reservationPeriod = ServiceManReservation::where('id', $validatedData['reservation_id'])->first();
        $reservationPeriodTime = $reservationPeriod->period->period;
        // Redirect back or to any other page after successful submission
        // i want pass transaction id to the next page as values to be used in the next page
        $checkTable = 'userService';
        $data = BankAccount::where('id', 1)->first();
        return view('front.bank-information', compact('checkTable', 'data'))->with('message', 'Your details have been added!');
        // return redirect(route("bank-information"))->with('message','Your details have been added!');
    }
}
