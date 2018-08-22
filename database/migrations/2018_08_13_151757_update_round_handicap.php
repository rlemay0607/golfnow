<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoundHandicap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rounds', function (Blueprint $table) {

            $table->integer('golfer_1_handicap')->nullable();
            $table->integer('golfer_2_handicap')->nullable();
            $table->integer('golfer_3_handicap')->nullable();
            $table->integer('golfer_4_handicap')->nullable();

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
