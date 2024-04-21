<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    public function index()
    {
        $details = UserDetail::all();
        return view('user_details.index', compact('details'));
    }

    public function create()
    {
        return view('user_details.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'city' => 'required|string|max:255',
            'street_name' => 'required|string|max:255',
            'building_number' => 'required|string|max:255',
            'floor_number' => 'nullable|string|max:255',
            'house_number' => 'required|string|max:255',
            'full_address' => 'required|string',
            'phone_number' => 'required|string|max:255',
            'service_count' => 'required|integer',
            'hours_count'    => 'required|integer',
            'weekly_visits' => 'required|integer',
            'contract_duration' => 'required|integer',
            'first_visit' => 'required|date',
            'payment_method' => 'required|string|max:255',
        ]);

        $userDetail = new UserDetail();
        $userDetail->city = $validated['city'];
        $userDetail->street_name = $validated['street_name'];
        $userDetail->building_number = $validated['building_number'];
        $userDetail->floor_number = $validated['floor_number'];
        $userDetail->house_number = $validated['house_number'];
        $userDetail->full_address = $validated['full_address'];
        $userDetail->phone_number = $validated['phone_number'];
        $userDetail->service_count = $validated['service_count'];
        $userDetail->weekly_visits = $validated['weekly_visits'];
        $userDetail->contract_duration = $validated['contract_duration'];
        $userDetail->first_visit = $validated['first_visit'];
        $userDetail->payment_method = $validated['payment_method'];
        $userDetail->user_id =   Auth::User()->id;  //add user id here to make it belong to the logged in

        $userDetail->save();

        // return to route in  web.php with message
        return redirect(route("bank-information"))->with('message','Your details have been added!');
    }


    public function edit(UserDetail $userDetail)
    {
        return view('user_details.edit', compact('userDetail'));
    }

    public function update(Request $request, UserDetail $userDetail)
    {
        $validated = $request->validate([
            'city' => 'required|string|max:255',
            // Add other validations as needed
        ]);

        $userDetail->update($validated);

        return redirect()->route('user_details.index');
    }

    public function destroy(UserDetail $userDetail)
    {
        $userDetail->delete();
        return redirect()->route('user_details.index');
    }
}
