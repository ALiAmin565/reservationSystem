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
            $table->dropColumn('pending');  // Remove the pending column
            $table->boolean('active')->default(false)->change(); // Ensure 'active' defaults to false
        });
    }

    public function down()
    {
        Schema::table('service_man_reservations', function (Blueprint $table) {
            $table->boolean('pending')->default(false); // Re-add pending column in case of rollback
            // Adjust the default for 'active' column if necessary, depending on previous settings
        });
    }
};
