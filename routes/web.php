<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SKTMController;

// Halaman utama (opsional, bisa diubah sesuai kebutuhan)
//Route::get('/', function () {
   // return view('sktm'); 
//});

// Route resource untuk SKTM
Route::resource('sktm', SKTMController::class);
