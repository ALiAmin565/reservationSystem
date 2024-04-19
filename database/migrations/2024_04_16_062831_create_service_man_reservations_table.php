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
        Schema::create('service_man_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 8, 2)->nullable();
            $table->integer('number_of_visits');
            $table->foreignId('period_id')->constrained('periods');
            $table->foreignId('time_id')->constrained('determined_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_man_reservations');
    }
};
