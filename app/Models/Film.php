<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'idFilm';
    protected $fillable = ['titFilm', 'desFilm', 'annsorFilm', 'lanFilm', 'durFilm', 'imgFilm'];

    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'correspond', 'idFilm', 'idSeance');
    }
}