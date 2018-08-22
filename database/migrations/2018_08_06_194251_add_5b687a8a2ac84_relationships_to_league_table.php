<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b687a8a2ac84RelationshipsToLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leagues', function(Blueprint $table) {
            if (!Schema::hasColumn('leagues', 'league_type_id')) {
                $table->integer('league_type_id')->unsigned()->nullable();
                $table->foreign('league_type_id', '10367_5b687a89f4204')->references('id')->on('league_types')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leagues', function(Blueprint $table) {
            
        });
    }
}
