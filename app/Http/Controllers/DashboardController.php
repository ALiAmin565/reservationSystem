<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Models\ServiceManReservation;
use App\Models\UserDetail;
use App\Models\worker;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class DashboardController extends Controller
{
    public function indexUsers()
    {
        $users = User::where('role', 'user')->get();
        // $admins = User::where('role', 'admin')->get();
        
        return view('dashboard.user.index', compact('users'));
    }

    public function indexAdmins()
    {
        // $users = User::where('role', 'user')->get();
        $users = User::where('role', 'admin')->get();
        
        return view('dashboard.user.index', compact( 'users'));
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
        $isActive = $status === '1'; // Check if the status parameter is 'active'

        // $userServices = UserService::with(['user', 'reservation' => function ($query) use ($isActive) {
        //     $query->where('active', $isActive);
        // }])->whereHas('reservation', function ($query) use ($isActive) {
        //     $query->where('active', $isActive);
        // })->get();
        // Use Record on User Service active 
        $userServices = UserService::with('user','reservation')->where('active', $isActive)->get();

        return view('dashboard.reservation.index', compact('userServices')); // Pass the data to the view
    }

    // fetchReservationsDesign
    public function fetchReservationsDesign()
    {
        $userServices = UserDetail::with('user')->get();
        return view('dashboard.reservation.index-design', compact('userServices')); // Pass the data to the view
    }

    public function toggleActive(ServiceManReservation $reservation)
    {
        $getNumberOfPersons = worker::find(1);
        // dd($getNumberOfPersons->persons_number_evening);
        if ($reservation->period->period == 'صباحي') {
            // First Number of Reservation
            $getNumberOfPersonsReservation = ServiceManReservation::with(['userServices'])->whereHas('userServices')->where('period_id', 2)->pluck('number_of_man_services')->toArray();
            $getNumberOfPersonsReservationMorning = array_sum($getNumberOfPersonsReservation);
            // Second Number of Design Plan 
            $getNumberOfPersonsDesignMorning = UserDetail::where('period', 'صباحي')->pluck('service_count')->toArray();
            $getNumberOfPersonsDesignMorning = array_sum($getNumberOfPersonsDesignMorning);
            $getNumberOfPersonsMorningAvailable = $getNumberOfPersons->persons_number_morning;
            $ValueCheckAvailability = $getNumberOfPersonsMorningAvailable  -  ($getNumberOfPersonsReservationMorning + $getNumberOfPersonsDesignMorning);
            if ($ValueCheckAvailability < 0) {
                return back()->with('error', 'عدد العمال غير متاح لتفعيل الحجز');
            } else {
                $userId = Auth::user()->id;
                $userService = UserService::where('reservation_id', $reservation->id)->where('user_id', $userId)->get()->last();
                // Make update on record active on user Service 
                $userService->update(
                    [
                        'active' => !$userService->active
                    ]
                );
                $reservation->save();
                return back()->with('success',  'تم تفغيل الحجز');
            }
        } elseif (($reservation->period->period == 'مسائي')) {
            // First Number of Reservation
            $getNumberOfPersonsReservation = ServiceManReservation::with(['userServices'])->whereHas('userServices')->where('period_id', 1)->pluck('number_of_man_services')->toArray();
            $getNumberOfPersonsReservationEvening = array_sum($getNumberOfPersonsReservation);
            // dd($getNumberOfPersonsReservation);
            // Second Number of Design Plan 
            $getNumberOfPersonsDesignEvening = UserDetail::where('period', 'مسائي')->pluck('service_count')->toArray();
            $getNumberOfPersonsDesignEvening = array_sum($getNumberOfPersonsDesignEvening);
            $getNumberOfPersonsEveningAvailable = $getNumberOfPersons->persons_number_evening;
            $ValueCheckAvailability = $getNumberOfPersonsEveningAvailable  -  ($getNumberOfPersonsReservationEvening + $getNumberOfPersonsDesignEvening);
            // dd($ValueCheckAvailability,$getNumberOfPersonsEveningAvailable,$getNumberOfPersonsReservationEvening,$getNumberOfPersonsDesignEvening);
            if ($ValueCheckAvailability < 0) {
                return back()->with('error', 'عدد العمال غير متاح لتفعيل الحجز');
            } else {
                $userId = Auth::user()->id;

                $userService = UserService::where('reservation_id', $reservation->id)->where('user_id', $userId)->get()->last();
                // dd($userService);
                $userService->active = !$userService->active; // Toggle the active state
                $reservation->save();
                return back()->with('success', 'تم تفغيل الحجز');
            }
        }
    }

    // toggleActiveDesign
    public function toggleActiveDesign(UserDetail $reservation)
    {
        // dd($reservation->period);
        $getNumberOfPersons = worker::find(1);
        if ($reservation->period == 'صباحي') {
            // First Number of Reservation
            $getNumberOfPersonsReservation = ServiceManReservation::with(['userServices'])->whereHas('userServices')->where('period_id', 2)->pluck('number_of_man_services')->toArray();
            $getNumberOfPersonsReservationMorning = array_sum($getNumberOfPersonsReservation);
            // Second Number of Design Plan 
            $getNumberOfPersonsDesignMorning = UserDetail::where('period', 'صباحي')->pluck('service_count')->toArray();
            $getNumberOfPersonsDesignMorning = array_sum($getNumberOfPersonsDesignMorning);
            $getNumberOfPersonsMorningAvailable = $getNumberOfPersons->persons_number_morning;
            $ValueCheckAvailability = $getNumberOfPersonsMorningAvailable  -  ($getNumberOfPersonsReservationMorning + $getNumberOfPersonsDesignMorning);
            // dd($ValueCheckAvailability);
            if ($ValueCheckAvailability < 0) {
                return back()->with('error', 'عدد العمال غير متاح لتفعيل الحجز');
            } else {
                $reservation->active = !$reservation->active; // Toggle the active state
                $reservation->save();
                return back()->with('success',  'تم تفغيل الحجز');
            }
        } elseif (($reservation->period == 'مسائي')) {
            // First Number of Reservation
            $getNumberOfPersonsReservation = ServiceManReservation::with(['userServices'])->whereHas('userServices')->where('period_id', 1)->pluck('number_of_man_services')->toArray();
            $getNumberOfPersonsReservationEvening = array_sum($getNumberOfPersonsReservation);
            // Second Number of Design Plan 
            $getNumberOfPersonsDesignEvening = UserDetail::where('period', 'مسائي')->pluck('service_count')->toArray();
            $getNumberOfPersonsDesignEvening = array_sum($getNumberOfPersonsDesignEvening);
            $getNumberOfPersonsEveningAvailable = $getNumberOfPersons->persons_number_Evening;
            $ValueCheckAvailability = $getNumberOfPersonsEveningAvailable  -  ($getNumberOfPersonsReservationEvening + $getNumberOfPersonsDesignEvening);
            // dd($ValueCheckAvailability);
            if ($ValueCheckAvailability < 0) {
                return back()->with('error', 'عدد العمال غير متاح لتفعيل الحجز');
            } else {
                $reservation->active = !$reservation->active; // Toggle the active state
                $reservation->save();
                return back()->with('success', 'تم تفغيل الحجز');
            }
        }
        // $reservation->active = !$reservation->active; // Toggle the active state
        // $reservation->save();
        // return back()->with('success', 'Reservation status updated successfully!');
    }
}
