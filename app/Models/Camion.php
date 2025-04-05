<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    protected $table = 'camion';
    protected $primaryKey = 'id_camion';
<<<<<<< HEAD
    public $timestamps = true;
=======
    public $timestamps = false;
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004

    protected $fillable = [
        'placa',
        'codigo_interno',
<<<<<<< HEAD
        'id_transporte', 
        'id_marca',
        'color',
        'modelo',
        'capacidad_toneladas'
=======
        'color',
        'modelo',
        'capacidad_toneladas',
        'id_transporte',
        'id_marca'
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
    ];

    public function transporte()
    {
<<<<<<< HEAD
        return $this->belongsTo(Transporte::class, 'id_transporte'); 
=======
        return $this->belongsTo(Transporte::class, 'id_transporte');
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
