<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5b687b14c3b68RoundUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('round_user')) {
            Schema::create('round_user', function (Blueprint $table) {
                $table->integer('round_id')->unsigned()->nullable();
                $table->foreign('round_id', 'fk_p_10100_9931_user_roun_5b687b14c3c2f')->references('id')->on('rounds')->onDelete('cascade');
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', 'fk_p_9931_10100_round_use_5b687b14c3c7e')->references('id')->on('users')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('round_user');
    }
}
