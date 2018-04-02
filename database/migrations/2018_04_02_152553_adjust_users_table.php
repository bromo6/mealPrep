<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdjustUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('allergy_peanuts')->default(0);
            $table->boolean('allergy_dairy')->default(0);
            $table->boolean('allergy_shellfish')->default(0);
            $table->boolean('allergy_egg')->default(0);
            $table->boolean('allergy_treenuts')->default(0);
            $table->boolean('allergy_soy')->default(0);
            $table->boolean('allergy_wheat')->default(0);
            $table->boolean('allergy_sesameseeds')->default(0);
            $table->boolean('allergy_yeast')->default(0);
            $table->boolean('allergy_finnedfish')->default(0);
            $table->boolean('allergy_corn')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_allergies');
    }
}
