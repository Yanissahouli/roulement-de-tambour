<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jouer extends Model
{
    protected $table = 'jouer';
    protected $fillable = ['idFilm', 'idCineaste', 'typRole'];
}
