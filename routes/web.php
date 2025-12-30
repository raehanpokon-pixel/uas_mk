<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AuthController;

// =======================
// PUBLIC (Tidak perlu login)
// =======================
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/aboutus', function () {
    return view('aboutus.index1');
})->name('about');

Route::get('/about', function () {
    return view('aboutus.index2');
})->name('aboutus');

Route::get('/serv', function () {
    return view('service.index1');
})->name('service');

Route::get('/serv2', function () {
    return view('service.index2');
})->name('service2');

Route::get('/contac', function () {
    return view('kontakkami');
})->name('kontak');

Route::get('/doctor1', function () {
    return view('doktor.index1');
})->name('dok');

Route::get('/doctor2', function () {
    return view('doktor.index2');
})->name('dok2');

// User boleh melihat halaman ambil antrian,
// tapi belum bisa mengisi antrian sebelum login
Route::get('/antrian/no', function () {
    return view('antrian.ambil');
})->name('antrian');




Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// =======================
// PROTECTED ROUTE (Harus login)
// =======================
Route::middleware('auth')->group(function () {

    Route::get('/antrian/create', [AntrianController::class, 'create'])->name('antrian.create');
    Route::post('/antrian/store', [AntrianController::class, 'store'])->name('antrian.store');
    Route::get('/antrian/success/{id}', [AntrianController::class, 'success'])->name('antrian.success');

});
