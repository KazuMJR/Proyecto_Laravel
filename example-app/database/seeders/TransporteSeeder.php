<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transporte;

class TransporteSeeder extends Seeder
{
    public function run()
    {
        Transporte::create([
            'codigo' => 'T001',
            'nombre' => 'Transporte S.A.',
            'razon_social' => 'Transportes y Logística'
        ]);
    }
}
