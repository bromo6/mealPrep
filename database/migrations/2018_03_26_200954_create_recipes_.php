<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('recipes', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->string('prep-time');
          $table->string('cook-time');
          $table->string('steps');
          $table->nullableTimestamps();

          $table->foreign('user_id')->references('id')->on('users');

      });

      Schema::create('favorites', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->integer('recipe_id')->unsigned();
          $table->nullableTimestamps();

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('recipe_id')->references('id')->on('recipes');

      });

      Schema::create('allergies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('type');
          $table->nullableTimestamps();

      });

      Schema::create('ingredients', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->nullableTimestamps();

      });

      Schema::create('recipe_ingredients', function (Blueprint $table) {
        $table->integer('ingredients_id')->unsigned();
        $table->integer('recipe_id')->unsigned();

        $table->foreign('ingredients_id')->references('id')->on('ingredients');
        $table->foreign('recipe_id')->references('id')->on('recipes');

      });

      Schema::create('recipe_allergies', function (Blueprint $table) {
        $table->integer('allergy_id')->unsigned();
        $table->integer('recipe_id')->unsigned();

        $table->foreign('allergy_id')->references('id')->on('allergies');
        $table->foreign('recipe_id')->references('id')->on('recipes');

      });

      Schema::create('user_allergies', function (Blueprint $table) {
        $table->integer('user_id')->unsigned();
        $table->integer('allergy_id')->unsigned();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('allergy_id')->references('id')->on('allergies');

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
