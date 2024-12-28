<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get("/jobs", [JobController::class, 'index'])->name('jobs');
Route::get("/jobs/create", [JobController::class, 'create'])->name('jobs.create');
Route::get("/jobs/{job}", [JobController::class, 'show'])->name('jobs.show');
Route::post("/jobs/store", [JobController::class, 'store'])->name('jobs.store');
