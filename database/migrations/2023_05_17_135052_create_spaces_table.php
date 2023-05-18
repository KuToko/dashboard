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
        Schema::create('spaces', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('bussiness_id');
            $table->string('code');
            $table->string('name');
            $table->string('photo');
            $table->integer('capacity');
            $table->double('price');
            $table->timestamps();

            $table->foreign('bussiness_id')->references('id')->on('bussiness');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spaces');
    }
};
