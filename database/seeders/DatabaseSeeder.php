<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Evenement;
use App\Models\Environnement;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\LevelSeeder;
use Database\Seeders\CategorieSeeder;
use Database\Seeders\EvenementSeeder;
use League\CommonMark\Environment\Environment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            LevelSeeder::class,
            CategorieSeeder::class,
            EnvironnementSeeder::class,
            VilleSeeder::class,
            EvenementSeeder::class,
            InscriptionSeeder::class,
            
            
        ]);
    }
}
