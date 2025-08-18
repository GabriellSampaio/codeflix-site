<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FilmeController;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\AuthController;


Route::get('/', [FilmeController::class, 'index']);
Route::get('/contato', function () { return view('contato'); });
Route::get('/sobre', [MembroController::class, 'index'])->name('sobre');
Route::resource('membros', MembroController::class);

Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

// Rotas para quem JÁ ESTÁ logado
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () { return view('auth.dashboard'); })->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
