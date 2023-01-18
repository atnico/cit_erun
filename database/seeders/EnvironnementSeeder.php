<?php

namespace Database\Seeders;

use App\Models\Environnement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvironnementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Environnement::create([
            'nom' => 'urbain'
        ]);

        Environnement::create([
            'nom' => 'nature'
        ]);
    }
}
