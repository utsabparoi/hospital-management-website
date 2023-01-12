<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('clients_reviews')){
            Schema::create('clients_reviews', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('age');
                $table->string('designation')->nullable();
                $table->string('image')->nullable();
                $table->text('review');
                $table->tinyInteger('status')->default(1);
                $table->timestamps();
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
        Schema::dropIfExists('clients_reviews');
    }
}
