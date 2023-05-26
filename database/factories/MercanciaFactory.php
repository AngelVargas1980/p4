<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mercancia>
 */
class MercanciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo'=>$this->faker->languageCode,
            'nombre'=> $this->faker->name,
            'id_tipo_mercancia'=>$this->faker->unique(true)->numberBetween(1, 1000),

        ];
    }
}
