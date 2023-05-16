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
        Schema::create('links', function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->uuid('bussiness_id');
            $table->string('name');
            $table->string('link');
            $table->timestamp('created_at');

            $table->foreign('bussiness_id')->references('id')->on('bussinessgi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
