<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Camion;
use App\Models\Transporte;
use App\Models\Marca;

class CamionFactory extends Factory
{
    protected $model = Camion::class;

    public function definition(): array
    {
        return [
            'placa' => strtoupper($this->faker->unique()->bothify('???-###')),
            'codigo_interno' => strtoupper($this->faker->unique()->bothify('INT###')),
            'color' => $this->faker->safeColorName,
            'modelo' => $this->faker->date(),
            'capacidad_toneladas' => $this->faker->randomFloat(2, 1, 50) . ' TON',
            'id_transporte' => Transporte::factory(),
            'id_marca' => Marca::factory(),
        ];
    }
}
