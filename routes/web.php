<?php

use App\Http\Controllers\catatanController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\PencatatanController;
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

Route::get('/', function () {
    return view('login');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [catatanController::class, 'index'])->name('login');
    Route::post('/login', [catatanController::class, 'login'])->name('login');
});

Route::get('/home',function(){
    return redirect('/dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [SuperadminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [catatanController::class, 'logout'])->name('logout');
});


Route::get('/tambahAkun', function () {
    return view('tambahAkun');
})->name('tambahAkun');
Route::post('/tambahAkun/create', [SuperadminController::class, 'create'])->name('tambahAkun.create');


Route::get('/pencatatan', function () {
    return view('pencatatan');
})->name('pencatatan');
Route::post('/pencatatan/store', [PencatatanController::class, 'store'])->name('pencatatan.store');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');