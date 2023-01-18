<?php

use App\Models\User;
use App\Models\Level;
use App\Models\Ville;
use App\Models\Categorie;
use App\Models\Environnement;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('image', 50);
            $table->string('pseudo', 50);
            $table->text('description', 500);
            $table->string('nb_participants');
            $table->boolean('valide')->default(false); 
            $table->timestamps();

            $table->foreignIdFor(Level::class)->constrained();
            $table->foreignIdFor(Environnement::class)->constrained();
            $table->foreignIdFor(Categorie::class)->constrained();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Ville::class)->constrained();





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
};
