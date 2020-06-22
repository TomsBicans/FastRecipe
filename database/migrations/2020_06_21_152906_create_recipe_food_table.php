<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_food', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('recipe_id')->unsigned();
                $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
                
            $table->bigInteger('food_id')->unsigned();
                $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade');
            
            $table->decimal('amount', 8, 2);
            //$table->decimal('calories', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_food');
    }
}
