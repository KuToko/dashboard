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
        Schema::create('feedbacks', function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('bussiness_id');
            $table->text('feedbacks')->nullable();
            $table->timestamp('created_at');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bussiness_id')->references('id')->on('bussiness')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
