<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Camion>
 */
class CamionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'placa_camion'=>$this->faker->randomNumber(5),
            'modelo'=>$this->faker->numberBetween(2,5),
            'marca'=>$this->faker->text(10),
            'color'=>$this->faker->colorName,
            'capacidad_toneladas'=>$this->faker->numberBetween(2,10),
            'transporte_codigo'=>$this->faker->unique()->numberBetween(1,1000),
        ];
    }
}
