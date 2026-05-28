<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserver extends Model
{
    protected $table = 'reserver';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = ['idUti', 'idSeance', 'nbPers'];

    public function seance()
    {
        return $this->belongsTo(Seance::class, 'idSeance', 'idSeance');
    }
}
