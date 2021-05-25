<?php

namespace Database\Factories;

use App\Models\Egresado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\en_US\Person;

class EgresadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Egresado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id'=> $this->faker->unique()->numberBetween($min = 1, $max = 100),
            'dni'=>$this->faker->unique()->numerify('########'),
            'nombres'=>$this->faker->name(),
            'ap_paterno'=>$this->faker->lastName(),
            'ap_materno'=>$this->faker->lastName(),
            'sexo'=>$this->faker->randomElement(['Masculino','Femenino']),
            'res_graduacion'=>$this->faker->unique()->numerify('##########'),
            'res_titulacion'=>$this->faker->unique()->numerify('##########'),
            'fecha_res_graduacion'=>$this->faker->date(),
            'fecha_res_titulacion'=>$this->faker->date(),
        ];
    }
}
