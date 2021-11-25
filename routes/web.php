<?php

use App\Http\Controllers\ConsultController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::middleware(['auth', 'role:0'])->group(function () {
    Route::get('/', function () {
        return view('user.home');
    })->name('user-home');
    Route::get('coba', function () {
        return view('user.treatments');
    });
    Route::get('detail', function () {
        return view('user.details-treatments');
    });

    Route::resource('doctor-consul', ConsultController::class);
    Route::get('reservasi-ad', function () {
        return view('admin.reservasi');
    });
    Route::get('doctor', [DoctorController::class, 'indexUser'])->name('doctor');
    Route::resource('transaction', TransactionController::class);
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('customer', function () {
        return view('admin.customer');
    });
    Route::get('treatment', function () {
        return view('admin.treatment');
    });
    Route::resource('doctor-list', DoctorController::class);
    // Route::resource('doctor-consul', ConsultController::class);
    Route::resource('reservasi', ReservationController::class);
});


// Route::get('reservasi', function () {
//     return view('user.reservasi');
// });



// Route::resource('reservasi-simpan', UserController::class);

Route::resource('doctor-list', DoctorController::class)->middleware('role:1');
Route::get('unauthorized', function () {
    return view('unauthorized');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
