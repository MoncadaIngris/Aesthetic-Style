<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {$this->call(TiendaSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(ProductoSeeder::class);

     
        
    }
}
