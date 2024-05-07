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
        Schema::table('user_details', function (Blueprint $table) {
            $table->boolean('active')->default(false); // Defaults to true, indicating active
        });
    }

    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropColumn('active');
        });
    }
};