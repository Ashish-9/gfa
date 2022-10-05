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
            $table->string('name_of_enterprise');
            $table->string('name_of_promoter');
            $table->string('designation');
            $table->string('company_name');
            $table->string('business_address');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('website');
            $table->string('fran_type');
            $table->string('food_type_veg')->nullable();
            $table->string('food_type_non_veg')->nullable();
            $table->string('order_value_type');
            $table->string('service_type_delivery')->nullable();
            $table->string('service_type_dine')->nullable();
            $table->string('service_type_take')->nullable();
            $table->string('available_in_swiggy')->nullable();
            $table->string('available_in_zomato')->nullable();
            $table->string('available_in_none')->nullable();
            $table->string('business_start_year');
            $table->string('legal_status');
            $table->string('legal_status_other')->nullable();
            $table->boolean('founder_active');
            $table->string('category');
            $table->string('category_remark');
            $table->string('dish_proud');
            $table->string('add_dish');
            $table->string('improve_dish');
            $table->boolean('cashless');
            $table->string('advertise');
            $table->string('google_rating');
            $table->string('facebook_rating');
            $table->string('zomato_rating');
            $table->string('swiggy_rating');
            $table->string('business_concept');
            $table->string('previous_gfa');
            $table->string('previous_gfa_year')->nullable();
            $table->string('total_employee');
            $table->string('monthly_bill');
            $table->string('monthly_footfall');
            $table->string('isp_name');
            $table->string('bank_name');
            $table->string('summary');
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
