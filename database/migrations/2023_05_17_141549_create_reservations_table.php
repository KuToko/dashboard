<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('uuid_generate_v4()'));
            $table->uuid('business_id');
            $table->uuid('payment_id');
            $table->uuid('user_id');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();

            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
