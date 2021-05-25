<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_egresado' => rand(1,100),
            'tipo' => $this->faker->randomElement(['Congreso', 'Simposio', 'Taller']),
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->text(),
            'condicion' => $this->faker->randomElement(['Organizador', 'Ponente', 'Participante']),
            'institucion' => $this->faker->company(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
        ];
    }
}
