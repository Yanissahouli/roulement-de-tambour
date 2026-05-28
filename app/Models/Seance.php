<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Seance extends Model
{
    protected $table = 'seance';
    protected $primaryKey = 'idSeance';
    protected $fillable = ['nomSeance', 'tarifSeance', 'dateSeance', 'idSal'];

    public function salle()
    {
        return $this->belongsTo(Salle::class, 'idSal', 'idSal');
    }

    public function films()
    {
        return $this->belongsToMany(Film::class, 'correspond', 'idSeance', 'idFilm');
    }
}
