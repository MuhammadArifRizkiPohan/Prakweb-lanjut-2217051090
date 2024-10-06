<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Tambahkan ini

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

// Rute untuk menampilkan profil pengguna
Route::get('/user/profile/{nama?}/{kelas?}/{npm?}', [UserController::class, 'profile'])->name('user.profile');

// Rute untuk membuat pengguna baru
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
