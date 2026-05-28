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

/// Films
Route::get('/films', [FilmController::class, 'index'])->name('film.index');
//cration
Route::get('/films/create', [FilmController::class, 'create'])->name('film.create')->middleware('auth');
Route::post('/films', [FilmController::class, 'store'])->name('film.store')->middleware('auth');
//
Route::get('/films/{film}', [FilmController::class, 'show'])->name('film.show');
//les routes des modification et supresion film
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('film.edit');
Route::put('/films/{film}', [FilmController::class, 'update'])->name('film.update');
Route::delete('/films/{film}', [FilmController::class, 'destroy'])->name('film.destroy');

// Cinéma

Route::get('/cinemas', [CinemaController::class, 'index'])->name('cinema.index');

Route::get('/cinemas/create', [CinemaController::class, 'create'])->name('cinema.create')->middleware('auth');
Route::post('/cinemas', [CinemaController::class, 'store'])->name('cinema.store')->middleware('auth');
Route::get('/cinemas/{cinema}/edit', [CinemaController::class, 'edit'])->name('cinema.edit')->middleware('auth');
Route::put('/cinemas/{cinema}', [CinemaController::class, 'update'])->name('cinema.update')->middleware('auth');
Route::delete('/cinemas/{cinema}', [CinemaController::class, 'destroy'])->name('cinema.destroy')->middleware('auth');
Route::get('/cinemas/{cinema}', [CinemaController::class, 'show'])->name('cinema.show');


Route::get('/cinemas/{cinema}', [CinemaController::class, 'show']);
// ajouter ajd
Route::delete('/reservation/{idSeance}/delete', [ReservationController::class, 'destroy'])->middleware('auth');
Route::get('/reservation/{idSeance}/edit', [ReservationController::class, 'edit'])->middleware('auth');
Route::put('/reservation/{idSeance}/update', [ReservationController::class, 'update'])->middleware('auth'); 

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
//utilisateur (proteger)
Route::get('/users', [UserController::class, 'index'])->name('user.index')->middleware('auth');

Route::get('/cinemas/{cinema}', [CinemaController::class, 'show'])->name('cinema.show');

Route::get('/inscription', [UserController::class, 'showInscription']);
Route::post('/inscription', [UserController::class, 'store']);

Route::get('/cineastes/{id}', [CineasteController::class, 'show'])->name('cineaste.show');

//bouton connection
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout']);
 //Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//
