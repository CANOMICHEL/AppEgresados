<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyectoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyecto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_egresado' => rand(1,100),
            'tipo' => $this->faker->randomElement(['Proyecto de investigación', 'Publicación']),
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->text(),
            'institucion' => $this->faker->randomElement([$this->faker->company(), '']),
            'fecha' => $this->faker->date(),
        ];
    }
}
