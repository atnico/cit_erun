<?php

namespace Database\Seeders;

use App\Models\Ville;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ville::create([
            'nom' => 'serris'
        ]);

        Ville::create([
            'nom' => 'jossigny'
        ]);

        Ville::create([
            'nom' => 'torcy'
        ]);

        Ville::create([
            'nom' => 'bouleurs'
        ]);

        Ville::create([
            'nom' => 'noisy le grand'
        ]);
    }
}
