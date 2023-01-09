<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesAndNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('articles_and_news')){
            Schema::create('articles_and_news', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('url');
                $table->string('icon')->nullable();
                $table->text('description')->nullable();
                $table->string('image')->nullable();
                $table->tinyInteger('status')->default(1);
                $table->string('date')->nullable();
                $table->unsignedBigInteger('created_by')->nullable();
                $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('articles_and_news');
    }
}
