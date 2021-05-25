<?php

namespace Database\Factories;

use App\Models\Empleo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_egresado' => rand(1,100),
            'nombre_empresa' => $this->faker->company(),
            'cargo' => $this->faker->jobTitle(),
            'tipo_institucion' => $this->faker->randomElement(['Pública', 'Privada']),
            'rubro' => $this->faker->word(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->randomElement([null, $this->faker->date()]),
        ];
    }
}
