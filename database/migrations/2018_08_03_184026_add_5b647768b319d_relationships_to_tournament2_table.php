<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b647768b319dRelationshipsToTournament2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournament_2s', function(Blueprint $table) {
            if (!Schema::hasColumn('tournament_2s', 'course_id')) {
                $table->integer('course_id')->unsigned()->nullable();
                $table->foreign('course_id', '10096_5b6477686c510')->references('id')->on('courses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('tournament_2s', 'tournament_manager_id')) {
                $table->integer('tournament_manager_id')->unsigned()->nullable();
                $table->foreign('tournament_manager_id', '10096_5b647768719d1')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('tournament_2s', function(Blueprint $table) {
            
        });
    }
}
