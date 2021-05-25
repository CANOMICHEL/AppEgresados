<?php

namespace Database\Factories;

use App\Models\Capacitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class CapacitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Capacitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_egresado' => rand(1,100),
            'tipo' => $this->faker->randomElement(['Curso','Diplomado','Maestría','Doctorado']),
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->text(),
            'institucion' => $this->faker->company(),
            'documento' => $this->faker->word() . '.pdf',
        ];
    }
}
