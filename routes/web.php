<?php

use App\Models\city;
use App\Models\Price;
use App\Models\UserDetail;
use App\Models\BankAccount;
use App\Models\Nationality;
use App\Models\UserService;
use App\Models\DeterminedTime;
use App\Models\ServiceManReservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\ServiceReservationController;
use App\Http\Controllers\ServiceManReservationController;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/dashboard-user', [DashboardController::class, 'indexUsers'])->name('dashboard-user');
    Route::get('/dashboard-admin', [DashboardController::class, 'indexAdmins'])->name('dashboard-admin');
    Route::get('/dashboard-admin/users/{user}/edit', [DashboardController::class, 'edit'])->name('users.edit');
    Route::put('/dashboard-admin/users/{user}', [DashboardController::class, 'update'])->name('users.update');
    Route::get('/reservations/{status}', [DashboardController::class, 'fetchReservations'])->name('reservations.fetch');
    Route::get('/reservations/{reservation}/toggle_active', [DashboardController::class, 'toggleActive'])->name('reservations.toggle_active');
    Route::get('/reservations-design', [DashboardController::class, 'fetchReservationsDesign'])->name('reservations-design.fetch');
    Route::get('/reservations-design/{reservation}/toggle_active', [DashboardController::class, 'toggleActiveDesign'])->name('reservations-design.toggle_active');
    Route::resource('reservations-admin', ServiceManReservationController::class);
    Route::resource('accounts', BankAccountController::class);
    Route::resource('prices', PriceController::class);
    Route::resource('nationality', NationalityController::class);
    Route::resource('worker', WorkerController::class);
    Route::resource('city', CityController::class);
    Route::delete('/user_services/{id}/soft_delete', [UserServiceController::class, 'softDelete'])->name('user_services.soft_delete');
    Route::delete('/user_details/{id}/soft_delete', [UserDetailController::class, 'softDelete'])->name('user_details.soft_delete');




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
        $price=Price::get()->first();    
        $nationalities= Nationality::all();
        $cities = city::all();  
        return view('front.design-plan', compact('times', 'user','price','nationalities','cities'));
    })->name('design-plan');
    Route::get("/my-profile", function () {
        $user = auth()->user();
        // Number Of active reservations    
        $GetUserReservation =   UserService::where('user_id', $user->id)->pluck('reservation_id')->toArray();
        // $activeReservations = ServiceManReservation::whereIn('id', $GetUserReservation)->where('active', 1)->count();
        // $activeUserDetail = UserDetail::where('user_id', $user->id)->where('active', 1)->count();
        // $activeReservations = $activeReservations + $activeUserDetail;
        $activeReservations = ServiceManReservation::with('nationalityData','period')->whereIn('id', $GetUserReservation)->get();
        // // Number Of inactive reservations
        // $inactiveReservations =     ServiceManReservation::whereIn('id', $GetUserReservation)->where('active', 0)->count();
        // $inactiveUserDetail = UserDetail::where('user_id', $user->id)->where('active', 0)->count();
        // $inactiveReservations = $inactiveReservations + $inactiveUserDetail;
        $inactiveReservations = UserDetail::where('user_id', $user->id)->get();
        dd( $activeReservations , $inactiveReservations );
        return view('front.profile', compact('user', 'activeReservations', 'inactiveReservations'));
    })->name('profile');
    Route::post('/services-user', [ServiceReservationController::class, 'show'])->name('services-user.show');
    Route::resource('user_details', UserDetailController::class);
    Route::post('/store-user-services', [UserServiceController::class, 'store'])->name('store.user.services');
});

Route::get('/print-pdf/{id}', [ServiceController::class,'printPDF'])->name('print.pdf');
use App\Http\Controllers\NewRequestController;

Route::get('/print-new-request-pdf/{id}', [NewRequestController::class, 'printPDF'])->name('print.newrequest.pdf');



Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

require __DIR__ . '/auth.php';
