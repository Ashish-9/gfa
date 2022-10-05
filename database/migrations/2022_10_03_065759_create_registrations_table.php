<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->text('name_of_enterprise');
            $table->text('name_of_promoter');
            $table->text('designation');
            $table->text('company_name');
            $table->text('business_address');
            $table->text('phone');
            $table->text('mobile');
            $table->text('email');
            $table->text('website');
            $table->text('fran_type');
            $table->text('food_type_veg')->nullable();
            $table->text('food_type_non_veg')->nullable();
            $table->text('order_value_type');
            $table->text('service_type_delivery')->nullable();
            $table->text('service_type_dine')->nullable();
            $table->text('service_type_take')->nullable();
            $table->text('available_in_swiggy')->nullable();
            $table->text('available_in_zomato')->nullable();
            $table->text('available_in_none')->nullable();
            $table->text('business_start_year');
            $table->text('legal_status');
            $table->text('legal_status_other')->nullable();
            $table->boolean('founder_active');
            $table->text('best_bakery')->nullable();
            $table->text('best_cafe')->nullable();
            $table->text('best_club')->nullable();
            $table->text('best_bar')->nullable();
            $table->text('best_fast_food')->nullable();
            $table->text('best_mithai')->nullable();
            $table->text('best_multi')->nullable();
            $table->text('best_for_assamese')->nullable();
            $table->text('best_for_european')->nullable();
            $table->text('best_for_north')->nullable();
            $table->text('best_for_ethnic')->nullable();
            $table->text('best_for_south')->nullable();
            $table->text('best_cloud')->nullable();
            $table->text('best_for_veg')->nullable();
            $table->text('most_instagrammable')->nullable();
            $table->text('best_open_air')->nullable();
            $table->text('best_hangout')->nullable();
            $table->text('best_for_fine')->nullable();
            $table->text('bartender_of_year')->nullable();
            $table->text('most_hygienic')->nullable();
            $table->text('promising_new')->nullable();
            $table->text('best_brand')->nullable();
            $table->text('best_dessert')->nullable();
            $table->text('best_for_oriental')->nullable();
            $table->text('most_accessible')->nullable();
            $table->text('restaurant_of_year')->nullable();            
            $table->text('category_remark');
            $table->text('dish_proud');
            $table->text('add_dish');
            $table->text('improve_dish');
            $table->boolean('cashless');
            $table->text('advertise');
            $table->text('google_rating');
            $table->text('facebook_rating');
            $table->text('zomato_rating');
            $table->text('swiggy_rating');
            $table->text('business_concept');
            $table->text('previous_gfa');
            $table->text('previous_gfa_year')->nullable();
            $table->text('total_employee');
            $table->text('monthly_bill');
            $table->text('monthly_footfall');
            $table->text('isp_name');
            $table->text('bank_name');
            $table->text('summary');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('registrations');
    }
}
