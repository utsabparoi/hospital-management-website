<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('doctors')){
            Schema::create('doctors', function (Blueprint $table) {
                $table ->id();
                $table -> string('name');
                $table -> string('degree');
                $table -> string('image')->nullable();
                $table -> string('branch');
                $table -> string('department');
                $table -> string('position');
                $table -> string('visit_start_time')->nullable();
                $table -> string('visit_end_time')->nullable();
                $table -> text('details')->nullable();
                $table -> string('weekday');
                $table -> string('status')->default(1);
                $table ->unsignedBigInteger('created_by')->nullable();
                $table ->unsignedBigInteger('updated_by')->nullable();
                $table -> timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
