<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Marca;

class CamionSeeder extends Seeder
{
    public function run()
    {
        $transporte = Transporte::first(); // Obtener el primer transporte
        $marca = Marca::first(); // Obtener la primera marca

        Camion::create([
            'placa' => 'ABC1234',
            'codigo_interno' => 'C001',
            'color' => 'Rojo',
            'modelo' => '2023-01-01',
            'capacidad_toneladas' => '10',
            'id_transporte' => $transporte->id_transporte,
            'id_marca' => $marca->id_marca
        ]);
    }
}
