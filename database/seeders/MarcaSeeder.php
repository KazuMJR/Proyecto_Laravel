<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
        Marca::factory(10)->create();
=======
        Marca::create([
            'descripcion' => 'Volvo'
        ]);
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
    }
}
