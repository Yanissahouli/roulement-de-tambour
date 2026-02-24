<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $table = 'salle';
    protected $primaryKey = 'idSal';
    protected $fillable = ['nomSalle', 'capSal', 'idCin'];
}
