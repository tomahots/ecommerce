<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuario::factory()->count(10)->create();
    }
}
