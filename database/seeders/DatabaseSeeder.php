<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Evenement;
use App\Models\Inscription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $evenements = Evenement::factory(5)->create();

        User::factory(10)->create()->each( function ($user) use ($evenements){
            Inscription::factory(rand(1, 3))->create([
                'user_id' => $user->id,
                'evenement_id' => ($evenements->random(1)->first()->id)
            ]);
        });
    }
}
   