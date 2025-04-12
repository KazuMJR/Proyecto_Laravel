<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transporte;

class TransporteSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        Transporte::factory(10)->create();
=======
        Transporte::create([
            'codigo' => 'T001',
            'nombre' => 'Transporte S.A.',
            'razon_social' => 'Transportes y Logística'
        ]);
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
    }
}
