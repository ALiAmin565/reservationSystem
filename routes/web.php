<?php

use App\Models\BankAccount;
use App\Models\DeterminedTime;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\ServiceReservationController;
use App\Http\Controllers\ServiceManReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// ReservationPage
Route::get('/', function () {
    return view('front.reservation');
});
// PackagesPage
Route::get('/services', [ServiceReservationController::class, 'index'])->name('services.index');


Route::get("/record", function () {
    return view('front.record');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard-admin', [DashboardController::class, 'index'])->name('dashboard-admin');
    Route::get('/dashboard-admin/users/{user}/edit', [DashboardController::class, 'edit'])->name('users.edit');
    Route::put('/dashboard-admin/users/{user}', [DashboardController::class, 'update'])->name('users.update');


    Route::get('/reservations/{status}', [DashboardController::class, 'fetchReservations'])->name('reservations.fetch');
    Route::get('/reservations/{reservation}/toggle_active', [DashboardController::class, 'toggleActive'])->name('reservations.toggle_active');
    // reservations-design.fetch
    Route::get('/reservations-design', [DashboardController::class, 'fetchReservationsDesign'])->name('reservations-design.fetch');
    Route::get('/reservations-design/{reservation}/toggle_active', [DashboardController::class, 'toggleActiveDesign'])->name('reservations-design.toggle_active');

    Route::resource('reservations-admin', ServiceManReservationController::class);
    Route::resource('accounts', BankAccountController::class);
});




Route::get('/dashboard', function () {
    // return view('front.reservation');
    return redirect()->route('dashboard-admin');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/design-plan", function () {
        $times = DeterminedTime::all();
        $user = auth()->user();
        return view('front.design-plan', compact('times', 'user'));
    })->name('design-plan');
    Route::get("/my-profile", function () {
        $user = auth()->user();
        return view('front.profile', compact('user'));
    })->name('profile');
    Route::post('/services-user', [ServiceReservationController::class, 'show'])->name('services-user.show');
    Route::get("/bank-information", function () {
        $data = BankAccount::where('id', 1)->first();
        return view('front.bank-information', compact('data'));
    })->name('bank-information');
    Route::resource('user_details', UserDetailController::class);
});
require __DIR__ . '/auth.php';
