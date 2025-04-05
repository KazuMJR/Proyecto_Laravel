<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transporte;

class TransporteFactory extends Factory
{
    protected $model = Transporte::class;

    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->bothify('TRP###'),
            'nombre' => $this->faker->company,
            'razon_social' => $this->faker->sentence(3),
        ];
    }
}
