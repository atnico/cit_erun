<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Evenement;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evenement::factory(5)->create([
            'nom' => 'nom'
        ]);
    }
}
