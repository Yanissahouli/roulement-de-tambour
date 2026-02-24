<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    protected $table = 'composer';
    protected $fillable = ['idFilm', 'idCineaste'];
}
