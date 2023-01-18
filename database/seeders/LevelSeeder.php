<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'nom' => 'debutant'
            
        ]);

        Level::create([
            'nom' => 'confirmé'
            
        ]);

        Level::create([
            'nom' => 'champion'
            
        ]);
    }
}
