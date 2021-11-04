<?php
use App\Models\Producto;
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'precio'=>$this->faker->numerify('######'),
            'calidad'=>$this->faker->randomElement($array=array('usada','semi usado','nuevo')),
            'tamaño'=>$this->faker->randomElement($array=array('mediana','pequeña')),
            'cantidad'=>$this->faker->numerify('##'),
            'nombre'=>$this->faker->name(),
        ];
    }
}
