<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'idFilm';
    public $timestamps = false;
    protected $fillable = ['titFilm', 'desFilm', 'annsorFilm', 'lanFilm', 'durFilm', 'imgFilm'];

    public function getRouteKeyName()
    {
        return 'idFilm';
    }

    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'correspond', 'idFilm', 'idSeance');
    }

    // Acteurs du film
    public function acteurs()
    {
        return $this->belongsToMany(Cineaste::class, 'jouer', 'idFilm', 'idCineaste')->withPivot('typRole');
    }

    // Réalisateurs du film
    public function realisateurs()
    {
        return $this->belongsToMany(Cineaste::class, 'composer', 'idFilm', 'idCineaste');
    }
}