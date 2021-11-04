<?php
use App\Models\Tienda;
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TiendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local'=>$this->faker->name(),
            'direccion'=>$this->faker->text('50'), 
            'color'=>$this->faker->colorName(),
            'telefono'=>$this->faker->numerify('########'),
        ];
    }
}
