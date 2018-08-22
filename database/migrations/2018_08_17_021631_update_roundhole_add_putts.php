<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoundholeAddPutts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('round_holes', function (Blueprint $table) {

            $table->integer('golfer_1_putts')->default('0')->nullable();
            $table->integer('golfer_2_putts')->default('0')->nullable();
            $table->integer('golfer_3_putts')->default('0')->nullable();
            $table->integer('golfer_4_putts')->default('0')->nullable();


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
