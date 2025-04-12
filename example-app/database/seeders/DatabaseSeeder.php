<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    public function run()
    {
        $this->call([
            MarcaSeeder::class,
            TransporteSeeder::class,
            CamionSeeder::class,
=======
    public function run(): void
    {
        $this->call([
            TransporteSeeder::class,
            MarcaSeeder::class,
            CamionSeeder::class
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
        ]);
    }
}
