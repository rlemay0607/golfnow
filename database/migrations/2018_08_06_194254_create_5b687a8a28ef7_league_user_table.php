<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5b687a8a28ef7LeagueUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('league_user')) {
            Schema::create('league_user', function (Blueprint $table) {
                $table->integer('league_id')->unsigned()->nullable();
                $table->foreign('league_id', 'fk_p_10367_9931_user_leag_5b687a8a28fcd')->references('id')->on('leagues')->onDelete('cascade');
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', 'fk_p_9931_10367_league_us_5b687a8a29022')->references('id')->on('users')->onDelete('cascade');
                
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
        Schema::dropIfExists('league_user');
    }
}
