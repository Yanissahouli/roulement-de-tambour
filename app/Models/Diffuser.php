<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diffuser extends Model
{
    protected $table = 'diffuser';
    protected $fillable = ['idCin', 'idFilm'];
}
