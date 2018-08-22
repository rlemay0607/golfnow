<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoundAddScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rounds', function (Blueprint $table) {

            $table->integer('golfer_1_front')->nullable();
            $table->integer('golfer_1_back')->nullable();
            $table->integer('golfer_1_total')->nullable();
            $table->integer('golfer_2_front')->nullable();
            $table->integer('golfer_2_back')->nullable();
            $table->integer('golfer_2_total')->nullable();
            $table->integer('golfer_3_front')->nullable();
            $table->integer('golfer_3_back')->nullable();
            $table->integer('golfer_3_total')->nullable();
            $table->integer('golfer_4_front')->nullable();
            $table->integer('golfer_4_back')->nullable();
            $table->integer('golfer_4_total')->nullable();


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
