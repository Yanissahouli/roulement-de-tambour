<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cineaste extends Model
{
    protected $table = 'cineaste';
    protected $primaryKey = 'idCineaste';
    protected $fillable = ['preCineaste', 'nomCineaste', 'datNaiCineaste', 'natCineaste', 'bioCineaste'];
}
