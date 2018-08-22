<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoundsAddGolferHole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rounds', function (Blueprint $table) {
        $table->integer('golfer_1_hole')->nullable();
        $table->integer('golfer_2_hole')->nullable();
        $table->integer('golfer_3_hole')->nullable();
        $table->integer('golfer_4_hole')->nullable();
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
