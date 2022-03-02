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
            $table->float('review',2,1);
            $table->float('chest',2,1);
            $table->float('arm',2,1);
            $table->float('shoulder',2,1);
            $table->float('belly',2,1);
            $table->float('back',2,1);
            $table->float('leg',2,1);
            $table->timestamps();
            $table->softDeletes();
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
