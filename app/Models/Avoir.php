<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avoir extends Model
{
    protected $table = 'avoir';
    protected $fillable = ['idFilm', 'idGen'];
}
