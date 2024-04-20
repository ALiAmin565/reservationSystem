<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get("/record", function () {
    return view('front.record');
});
Route::get("/degisen-plan", function () {
    return view('front.degisen-plan');
});
Route::get("/bank-information", function () {
    return view('front.bank-information');
});

// Dashboard Page

Route::get("/dashboard-admin", function () {
    return view('dashboard.index');
});

Route::get("/reservation-admin", function () {
    return view('dashboard.forms-elements');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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
