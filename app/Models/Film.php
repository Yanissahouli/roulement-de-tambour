<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'idFilm';
    
    protected $fillable = ['titFilm', 'desFilm', 'annsorFilm', 'lanFilm', 'durFilm', 'imgFilm'];

    // ← ajoute ça
    public function getRouteKeyName()
    {
        return 'idFilm';
    }

    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'correspond', 'idFilm', 'idSeance');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'avoir', 'idFilm', 'idGen');
    }
}