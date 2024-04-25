<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('service_man_reservations', function (Blueprint $table) {
            // Storing the percentage as a decimal (e.g., 0.12 for 12%)
            $table->decimal('service_charge', 8, 2)->nullable(); // Allows values from 0.0001 (0.01%) to 9.9999 (999.99%)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_man_reservations', function (Blueprint $table) {
            $table->dropColumn('service_charge');
        });
    }
};
