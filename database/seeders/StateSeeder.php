<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            [
                'name' => 'Por Hacer',

            ],
            [
                'name' => 'En Progreso',

            ],
            [
                'name' => 'Completada',

            ],                    
        ]);

    }
}
