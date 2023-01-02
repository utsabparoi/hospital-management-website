<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("doctor", function (Blueprint $table){
            $table-> bigIncrements("id");
            $table -> string('doctor_name');
            $table -> string('doctor_image');
            $table -> string('doctor_department');
            $table -> string('doctor_position');
            $table -> string('doctor_visit_time');
            $table -> string('doctor_description');
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
