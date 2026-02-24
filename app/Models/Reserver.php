<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserver extends Model
{
    protected $table = 'reserver';
    protected $fillable = ['idUti', 'idSeance', 'nbPers'];
}
