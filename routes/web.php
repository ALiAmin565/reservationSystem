<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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
Route::get("/packages", function () {
    return view('front.package');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard-admin', [DashboardController::class, 'index'])->name('dashboard-admin');
    Route::get('/dashboard-admin/users/{user}/edit', [DashboardController::class, 'edit'])->name('users.edit');
    Route::put('/dashboard-admin/users/{user}', [DashboardController::class, 'update'])->name('users.update');


    Route::get('/reservations/{status}', [DashboardController::class, 'fetchReservations'])->name('reservations.fetch');
    Route::get('/reservations/{reservation}/toggle_active', [DashboardController::class, 'toggleActive'])->name('reservations.toggle_active');

    Route::resource('reservations-admin', ServiceManReservationController::class);
});

Route::get("/reservation-admin", function () {
    return view('dashboard.res-form-admin');
});

Route::get('/dashboard', function () {
    return view('front.reservation');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// registerCopy

Route::get('/registerCopy', function () {
    return view('auth.registerCopy');
});
require __DIR__ . '/auth.php';
