<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    protected $table = 'camion';
    protected $primaryKey = 'id_camion';
    public $timestamps = true;

    protected $fillable = [
        'placa',
        'codigo_interno',
        'id_transporte', 
        'id_marca',
        'color',
        'modelo',
        'capacidad_toneladas'
    ];

    public function transporte()
    {
        return $this->belongsTo(Transporte::class, 'id_transporte'); 
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
