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
<<<<<<< HEAD
        // Verificamos que haya Transportes y Marcas en la BD
        if (Transporte::count() == 0) {
            Transporte::factory(10)->create();
        }
        if (Marca::count() == 0) {
            Marca::factory(10)->create();
        }

        // Ahora generamos 50 camiones, asignándoles transportes y marcas aleatorias
        Camion::factory(50)->create([
            'id_transporte' => Transporte::inRandomOrder()->first()->id_transporte,
            'id_marca' => Marca::inRandomOrder()->first()->id_marca,
        ]);
    }
}

=======
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
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
