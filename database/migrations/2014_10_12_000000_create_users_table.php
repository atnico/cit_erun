<?php

// use App\Models\Evenement;
use App\Models\Role;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo', 50);
            $table->string('streetName', 100);
            $table->string('postcode', 20);
            $table->string('city', 50);
            $table->string('email', 50)->unique();
            $table->string('password', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // $table->foreignIdFor(Role::class)->constrained();
            $table->foreignId('role_id')->default(1)->constrained();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
