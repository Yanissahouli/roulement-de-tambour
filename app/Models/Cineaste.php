<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cineaste extends Model
{
    protected $table = 'cineaste';
    protected $primaryKey = 'idCineaste';
    protected $fillable = ['preCineaste', 'nomCineaste', 'datNaiCineaste', 'natCineaste', 'bioCineaste'];
    // Films où il joue
    public function filmsJoues()
    {
        return $this->belongsToMany(Film::class, 'jouer', 'idCineaste', 'idFilm')->withPivot('typRole');
    }

    // Films qu'il a composés/réalisés
    public function filmsComposés()
    {
        return $this->belongsToMany(Film::class, 'composer', 'idCineaste', 'idFilm');
    }
}
