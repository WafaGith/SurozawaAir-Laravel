<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\ScheduleController;
use App\Models\Schedule;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('planes', PlaneController::class);
Route::resource('schedules', ScheduleController::class);
Route::get('schedules.cetak', [ScheduleController::class, 'cetak'])->name('cetak');


