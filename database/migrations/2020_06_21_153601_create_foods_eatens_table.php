<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsEatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods_eatens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('recipe_id')->unsigned();
                $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
                
            $table->integer('count')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods_eatens');
    }
}
