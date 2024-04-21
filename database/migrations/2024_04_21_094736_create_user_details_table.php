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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('city');
            $table->string('street_name');
            $table->string('building_number');
            $table->string('floor_number')->nullable();
            $table->string('house_number');
            $table->text('full_address');
            $table->string('phone_number');
            $table->integer('service_count')->default(0);
            $table->integer('weekly_visits')->default(0);
            $table->integer('hours_count')->default(0);
            $table->integer('contract_duration')->default(0);
            $table->datetime('first_visit')->nullable();
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
