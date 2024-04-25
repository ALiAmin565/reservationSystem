<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToUserServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_services', function (Blueprint $table) {
            $table->string('city')->nullable();
            $table->string('street_name')->nullable();
            $table->integer('building_number')->nullable();
            $table->integer('floor_number')->nullable();
            $table->integer('house_number')->nullable();
            $table->string('full_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('transaction_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_services', function (Blueprint $table) {
            $table->dropColumn(['city', 'street_name', 'building_number', 'floor_number', 'house_number', 'full_address', 'phone_number', 'transaction_id']);
        });
    }
}
