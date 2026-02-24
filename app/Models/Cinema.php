<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinema';
    protected $primaryKey = 'idCin';
    protected $fillable = ['nomCin', 'adrCin', 'vilCin', 'cpCin'];
}
