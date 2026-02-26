<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Salle extends Model
{
    protected $table = 'salle';
    protected $primaryKey = 'idSal';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['nomSalle', 'capSal', 'idCin'];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'idCin', 'idCin');
    }
}   