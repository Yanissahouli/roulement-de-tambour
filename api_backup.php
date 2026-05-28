<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Film;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return'coucou';
});

Route::get('/film', function () {
    return  Film::all()->toJson();
});
