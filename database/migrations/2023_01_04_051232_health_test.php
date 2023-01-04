<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HealthTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("health_test", function (Blueprint $table){
            $table-> bigIncrements("id");
            $table -> string('test_name');
            $table -> string('test_details');
            $table -> string('test_cost');
            $table -> string('test_discount');
            $table -> string('status');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
