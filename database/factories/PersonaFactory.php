<?php
use App\Models\Persona;
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'fechadenacimiento'=>$this->faker->date($format='Y-m-d', $max= 'now'),
        'nombre'=>$this->faker->name(),
        'apellido'=>$this->faker->name(),
        'identidad'=>$this->faker->numerify('#############'),
        'direccion'=>$this->faker->text('50'),
        'telefono'=>$this->faker->numerify('########'),
        ];
    }
}
