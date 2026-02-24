<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Correspond extends Model
{
    protected $table = 'correspond';
    protected $fillable = ['idSeance', 'idFilm'];
}
