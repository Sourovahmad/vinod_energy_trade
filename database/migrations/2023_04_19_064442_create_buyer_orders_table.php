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
        Schema::create('buyer_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');


            $table->string('supply_point_name')->nullable();
            $table->string('location_of_supply_point')->nullable();
            $table->string('purchase_request_for')->nullable()->comment('electricity,naturalGas');
            $table->dateTime('deadline_offer_recive')->nullable();
            $table->date('publication_date')->nullable();

            // natural gas
            $table->string('natural_gas_point_of_distribution_consumtion_1')->nullable();
            $table->string('natural_gas_tarrif_point_of_consumption_1')->nullable();
            $table->string('reserve')->nullable();
            $table->string('consumption_curve_point_1')->nullable();
            $table->string('expected_january')->nullable();
            $table->string('expected_february')->nullable();
            $table->string('expected_march')->nullable();
            $table->string('expected_april')->nullable();
            $table->string('expected_may')->nullable();
            $table->string('expected_june')->nullable();
            $table->string('expected_july')->nullable();
            $table->string('expected_august')->nullable();
            $table->string('expected_september')->nullable();
            $table->string('expected_october')->nullable();
            $table->string('expected_november')->nullable();
            $table->string('expected_december')->nullable();
            
            $table->string('contact_term_days')->nullable();
            $table->string('contact_term_months')->nullable();
            $table->string('contact_term_year')->nullable();
            $table->date('start_of_supply')->nullable();
            $table->string('total_quantity')->nullable();
            $table->string('cuenca_winter_mix')->nullable();

            $table->string('winter_mqn')->nullable();
            $table->string('winter_pto')->nullable();
            $table->string('winter_scr')->nullable();
            $table->string('winter_chu')->nullable();
            $table->string('winter_noa')->nullable();


            $table->string('cuenca_summer_mix')->nullable();

            $table->string('summer_mqn')->nullable();
            $table->string('summer_pto')->nullable();
            $table->string('summer_scr')->nullable();
            $table->string('summer_chu')->nullable();
            $table->string('summer_noa')->nullable();


            $table->string('type_of_supply')->nullable();
            $table->string('exclusivity')->nullable();
            $table->string('partial_award')->nullable();
            $table->string('price')->nullable()->comment('flat,seasonal');
            $table->string('price_renegotiation')->nullable();
            $table->string('take_or_pay_optional_to_seller')->nullable();
            $table->string('take_or_pay_percentage')->nullable();
            $table->string('take_or_pay_price')->nullable();

            $table->string('optional_delivery_to_seller')->nullable();
            $table->string('delivery_or_pay')->nullable();
            $table->string('delivery_or_pay_price')->nullable();
            $table->string('payment_term')->nullable();
            $table->string('exchange_rate')->nullable()->comment('BNA Ticket Seller, BNA Currency Seller, ARS');
            $table->string('default_rates_debts')->nullable();
            $table->string('mortage_rate_debts')->nullable();
            $table->string('auction_commision')->nullable();
            $table->string('bid_maintain_gurantee')->nullable();

            $table->string('status')->default('open')->comment('open,awarded,under_analysis,desert');
            $table->string('code')->nullable();

            $table->string('user_category_point_of_consumption')->nullable();
            $table->string('annual_energy')->nullable();
            $table->string('priority_given_to_agreement')->nullable();
            $table->string('early_termination')->nullable();

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
        Schema::dropIfExists('buyer_orders');
    }
};
