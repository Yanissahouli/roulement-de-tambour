<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AuthController;

// Accueil
Route::get('/', [AccueilController::class, 'index'])->name('home');

// Films
Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{film}', [FilmController::class, 'show']);

// Cinémas
Route::get('/cinemas', [CinemaController::class, 'index']);
Route::get('/cinemas/{cinema}', [CinemaController::class, 'show']);

// Séances
Route::get('/seances/{seance}', [SeanceController::class, 'show']);

// Réservations (protégées)
Route::get('/reservation/{seance}', [ReservationController::class, 'create'])
    ->middleware('auth');

Route::post('/reservation', [ReservationController::class, 'store'])
    ->middleware('auth');

// Auth
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
