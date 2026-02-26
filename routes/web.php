<?php
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CineasteController;
use App\Http\Controllers\UserController;

// Accueil
Route::get('/', [AccueilController::class, 'index'])->name('home');

// Films
Route::get('/films', [FilmController::class, 'index'])->name('film.index');
Route::get('/films/{film}', [FilmController::class, 'show'])->name('film.show');

// Cinéma
Route::get('/cinemas', [CinemaController::class, 'index'])->name('cinema.index');
Route::get('/cinemas/{cinema}', [CinemaController::class, 'show']);

// Séances
Route::get('/seances/{seance}', [SeanceController::class, 'show']);

// Réservations (protégées)
Route::get('/reservation/{seance}', [ReservationController::class, 'create'])->name('reservation.create')->   middleware('auth');
Route::post('/reservation', [ReservationController::class, 'store'])->middleware('auth');

// Auth
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Cinéastes
Route::get('/cineastes', [CineasteController::class, 'index'])->name('cineaste.index');

// Utilisateurs
Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/cinemas/{cinema}', [CinemaController::class, 'show'])->name('cinema.show');

Route::get('/inscription', [UserController::class, 'showInscription']);
Route::post('/inscription', [UserController::class, 'store']);
