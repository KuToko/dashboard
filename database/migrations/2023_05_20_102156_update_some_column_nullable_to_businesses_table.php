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
        Schema::table('businesses', function (Blueprint $table) {
            $table->boolean('is_monday_open')->default(false)->nullable()->change();
            $table->time('monday_start_time')->nullable()->change();
            $table->time('monday_end_time')->nullable()->change();
            $table->string('monday_notes')->nullable()->change();
            
            $table->boolean('is_tuesday_open')->default(false)->nullable()->change();
            $table->time('tuesday_start_time')->nullable()->change();
            $table->time('tuesday_end_time')->nullable()->change();
            $table->string('tuesday_notes')->nullable()->change();

            $table->boolean('is_wednesday_open')->default(false)->nullable()->change();
            $table->time('wednesday_start_time')->nullable()->change();
            $table->time('wednesday_end_time')->nullable()->change();
            $table->string('wednesday_notes')->nullable()->change();

            $table->boolean('is_thursday_open')->default(false)->nullable()->change();
            $table->time('thursday_start_time')->nullable()->change();
            $table->time('thursday_end_time')->nullable()->change();
            $table->string('thursday_notes')->nullable()->change();

            $table->boolean('is_friday_open')->default(false)->nullable()->change();
            $table->time('friday_start_time')->nullable()->change();
            $table->time('friday_end_time')->nullable()->change();
            $table->string('friday_notes')->nullable()->change();

            $table->boolean('is_saturday_open')->default(false)->nullable()->change();
            $table->time('saturday_start_time')->nullable()->change();
            $table->time('saturday_end_time')->nullable()->change();
            $table->string('saturday_notes')->nullable()->change();

            $table->boolean('is_sunday_open')->default(false)->nullable()->change();
            $table->time('sunday_start_time')->nullable()->change();
            $table->time('sunday_end_time')->nullable()->change();
            $table->string('sunday_notes')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('businesses', function (Blueprint $table) {
            $table->boolean('is_monday_open')->default(false)->change();
            $table->time('monday_start_time')->change();
            $table->time('monday_end_time')->change();
            $table->string('monday_notes')->change();
            
            $table->boolean('is_tuesday_open')->default(false)->change();
            $table->time('tuesday_start_time')->change();
            $table->time('tuesday_end_time')->change();
            $table->string('tuesday_notes')->change();

            $table->boolean('is_wednesday_open')->default(false)->change();
            $table->time('wednesday_start_time')->change();
            $table->time('wednesday_end_time')->change();
            $table->string('wednesday_notes')->change();

            $table->boolean('is_thursday_open')->default(false)->change();
            $table->time('thursday_start_time')->change();
            $table->time('thursday_end_time')->change();
            $table->string('thursday_notes')->change();

            $table->boolean('is_friday_open')->default(false)->change();
            $table->time('friday_start_time')->change();
            $table->time('friday_end_time')->change();
            $table->string('friday_notes')->change();

            $table->boolean('is_saturday_open')->default(false)->change();
            $table->time('saturday_start_time')->change();
            $table->time('saturday_end_time')->change();
            $table->string('saturday_notes')->change();

            $table->boolean('is_sunday_open')->default(false)->change();
            $table->time('sunday_start_time')->change();
            $table->time('sunday_end_time')->change();
            $table->string('sunday_notes')->change();
        });
    }
};
