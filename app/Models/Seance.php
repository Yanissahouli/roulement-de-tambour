<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $table = 'seance';
    protected $primaryKey = 'idSeance';
    protected $fillable = ['nomSeance', 'tarifSeance', 'dateSeance', 'idSal'];
}
