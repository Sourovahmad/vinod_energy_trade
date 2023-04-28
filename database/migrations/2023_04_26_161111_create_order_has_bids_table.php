<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_has_bids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id');

            $table->string('price_january')->nullable();
            $table->string('price_february')->nullable();
            $table->string('price_march')->nullable();
            $table->string('price_april')->nullable();
            $table->string('price_may')->nullable();
            $table->string('price_june')->nullable();
            $table->string('price_july')->nullable();
            $table->string('price_august')->nullable();
            $table->string('price_september')->nullable();
            $table->string('price_october')->nullable();
            $table->string('price_november')->nullable();
            $table->string('price_december')->nullable();
    
            $table->string('optional_take_or_pay_to_seller')->nullable();
            $table->string('optional_delivery_or_pay_to_seller')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_has_bids');
    }
};
