<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'idFilm';
    protected $fillable = ['titFilm', 'desFilm', 'annsorFilm', 'lanFilm', 'durFilm'];
}
