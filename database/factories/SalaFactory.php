<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Sala>
 */
class SalaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cursos = ['Informática', 'Edificações', 'Nutrição', 'Logística', 'Agronegócio'];
        return [
            'ano' =>$this->faker->numberBetween(2013, 2023),
            'serie'=>$this->faker->numberBetween(1, 3),
            'curso' => $cursos[$this->faker->numberBetween(0, 3)],

        ];
    }
}
