<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WebsiteInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("website_information", function (Blueprint $table){
            $table-> bigIncrements("id");
            $table -> string('favicon');
            $table -> string('name');
            $table -> string('title');
            $table -> string('phone_one');
            $table -> string('phone_two');
            $table -> string('hot_line');
            $table -> string('primary_email');
            $table -> string('secondary_email');
            $table -> string('primary_address');
            $table -> string('company_logo');
            $table -> string('website');
            $table -> string('bin_no');
            $table -> string('google_map');
            $table -> string('secondary_address');
            $table -> string('meta_keyword');
            $table -> string('meta_description');
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
