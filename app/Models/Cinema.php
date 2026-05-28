<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Cinema extends Model
{
    protected $table = 'cinema';
    protected $primaryKey = 'idCin';
    public $timestamps = false; 
    protected $fillable = ['nomCin', 'adrCin', 'vilCin', 'cpCin'];

    public function seances()
    {
        return $this->hasMany(Salle::class, 'idCin', 'idCin')
                    ->join('seance', 'salle.idSal', '=', 'seance.idSal');
    }

    public function films()
    {
        return $this->belongsToMany(Film::class, 'diffuser', 'idCin', 'idFilm', 'idCin', 'idFilm', 'imgFilm');
    }
}