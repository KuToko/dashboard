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
        Schema::create('bussiness', function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->uuid('claim_by')->nullable();
            $table->uuid('created_by')->nullable();
            $table->uuid('province_id')->nullable();
            $table->uuid('regency_id')->nullable();
            $table->uuid('district_id')->nullable();
            $table->uuid('village_id')->nullable();
            $table->string('postal_code', 6);
            $table->string('username');
            $table->string('bussiness_name');
            $table->string('latitiude');
            $table->string('longitude');
            $table->string('address');
            $table->string('profile_picture');
            $table->string('descriptions');
            $table->date('released_at');
            $table->double('ranting_gmaps');
            $table->boolean('deleted')->default(false);
            $table->timestamps();

            $table->boolean('is_monday_open')->default(false);
            $table->time('monday_start_time');
            $table->time('monday_end_time');
            $table->string('monday_notes');
            

            $table->boolean('is_tuesday_open')->default(false);
            $table->time('tuesday_start_time');
            $table->time('tuesday_end_time');
            $table->string('tuesday_notes');
            

            $table->boolean('is_wednesday_open')->default(false);
            $table->time('wednesday_start_time');
            $table->time('wednesday_end_time');
            $table->string('wednesday_notes');
            

            $table->boolean('is_thrusday_open')->default(false);
            $table->time('thrusday_start_time');
            $table->time('thrusday_end_time');
            $table->string('thrusday_notes');

            $table->boolean('is_friday_open')->default(false);
            $table->time('friday_start_time');
            $table->time('friday_end_time');
            $table->string('friday_notes');

            $table->boolean('is_saturday_open')->default(false);
            $table->time('saturday_start_time');
            $table->time('saturday_end_time');
            $table->string('saturday_notes');

            $table->boolean('is_sunday_open')->default(false);
            $table->time('sunday_start_time');
            $table->time('sunday_end_time');
            $table->string('sunday_notes');
            
            $table->foreign('claim_by')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('regency_id')->references('id')->on('regencies');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('village_id')->references('id')->on('villages');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussiness');
    }
};
