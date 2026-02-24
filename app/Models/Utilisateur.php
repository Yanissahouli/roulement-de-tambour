<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'idUti';
    protected $fillable = ['nomUti', 'preUti', 'mailUtil', 'mdpUti', 'rolUti'];
}
