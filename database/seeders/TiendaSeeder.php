<?php

namespace Database\Seeders;
use App\Models\Tienda;

use Illuminate\Database\Seeder;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tienda::Factory(500)->create();
    }
}
