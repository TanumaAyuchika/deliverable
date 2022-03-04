<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('body',250);
            $table->integer('review');
            $table->integer('chest');
            $table->integer('arm');
            $table->integer('shoulder');
            $table->integer('belly');
            $table->integer('back');
            $table->integer('leg');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id');
            $table->integer('store_id');
            $table->string('comment',300);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
