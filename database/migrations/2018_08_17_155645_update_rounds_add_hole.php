<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoundsAddHole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rounds', function (Blueprint $table) {

            $table->integer('golfer_1_hdc_score')->default('0')->nullable();
            $table->integer('golfer_2_hdc_score')->default('0')->nullable();
            $table->integer('golfer_3_hdc_score')->default('0')->nullable();
            $table->integer('golfer_4_putts_hdc_score')->default('0')->nullable();
            $table->integer('hole')->default('0')->nullable();


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
