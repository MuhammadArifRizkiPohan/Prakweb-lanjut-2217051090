<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Tambahkan ini

Route::get('/', function () {
    return view('welcome');
});

// Pastikan Anda sudah menghapus atau mengomentari baris berikut jika tidak lagi menggunakan ProfileController
// use App\Http\Controllers\ProfileController;

// Rute untuk menampilkan profil pengguna
Route::get('/user/profile/{nama?}/{kelas?}/{npm?}', [UserController::class, 'profile'])->name('user.profile');

// Rute untuk membuat pengguna baru
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 
'store'])->name('user.store'); 