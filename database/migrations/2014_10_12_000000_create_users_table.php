<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('user_type');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable(); // using as logo




            // additional fields
            $table->string('person_id')->nullable();
            $table->string('social_name')->nullable();
            $table->string('company_cuit')->nullable();
            $table->string('proof_of_cuit', 2048)->nullable();
            $table->string('company_last_balance')->nullable();
            $table->string('company_role')->nullable();
            $table->string('company_products')->nullable();


            $table->string('last_year_average_trade_volume_of_natural_gas')->nullable();
            $table->string('last_year_average_powersold_of_electric_engery')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
