<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Models\ServiceManReservation;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate the input data, excluding password from being required.
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,user',
        ]);

        // Check if a new password has been provided
        if (!empty($request->password)) {
            $request->validate([
                'password' => 'nullable|string|min:8|confirmed', // Ensure password is confirmed
            ]);
            $validatedData['password'] = bcrypt($request->password); // Encrypt the new password
        }

        // Update the user data with the validated data
        $user->update($validatedData);

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }

    public function fetchReservations($status)
    {
        $isActive = $status === 'active'; // Check if the status parameter is 'active'

        $userServices = UserService::with(['user', 'reservation' => function ($query) use ($isActive) {
            $query->where('active', $isActive);
        }])->whereHas('reservation', function ($query) use ($isActive) {
            $query->where('active', $isActive);
        })->get();

        return view('dashboard.reservation.index', compact('userServices')); // Pass the data to the view
    }

    public function toggleActive(ServiceManReservation $reservation)
    {
        $reservation->active = !$reservation->active; // Toggle the active state
        $reservation->save();

        return back()->with('success', 'Reservation status updated successfully!');
    }
}
