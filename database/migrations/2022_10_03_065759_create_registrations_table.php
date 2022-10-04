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
            $table->string('business_start_year');
            $table->bigInteger('legal_status_id');
            $table->boolean('founder_active');
            $table->bigInteger('category_id');
            $table->string('category_remark');
            $table->string('dish_proud');
            $table->string('add_dish');
            $table->string('improve_dish');
            $table->boolean('cashless');
            $table->bigInteger('advertise_id');
            $table->bigInteger('outlet_rating_id');
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

            $table->foreign('legal_status_id')->references('id')->on('public.legal_status');
            $table->foreign('advertise_id')->references('id')->on('public.advertise');
            $table->foreign('outlet_rating_id')->references('id')->on('public.outlet_rating');
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
