<?php

namespace Database\Factories;
use App\Dado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Dado>
 */

class DadoFactory extends Factory
{
    protected $model = Dado::class;

    public function definition()
    {
        //$cursos = ['Informática', 'Edificações', 'Nutrição', 'Logística', 'Agronegócio'];
        $periodo = ['1° Bimestre', '2° Bimestre', '3° Bimestre', '4° Bimestre'];
        return [
            'ref' => $this->faker->numberBetween(1, 50),
            'Periodo' => $periodo[$this->faker->numberBetween(0, 3)],
            'QtdAlunos' => $this->faker->numberBetween(20, 50),
            'MedGeral' => $this->faker->numberBetween(0, 10),
            'Infreq' => $this->faker->numberBetween(0.00, 10),
            'Freq'=> $this->faker->randomFloat(1 , 20, 30),
            'AcimaMedPT' => $this->faker->numberBetween(0, 10),
            'AcimaMedMT' => $this->faker->numberBetween(0, 10),
            'AcimaMedGeral' => $this->faker->numberBetween(0, 10),
        ];
    }
}
