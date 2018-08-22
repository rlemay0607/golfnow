<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b65b0d2317e4RelationshipsToRoundHoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('round_holes', function(Blueprint $table) {
            if (!Schema::hasColumn('round_holes', 'course_name_id')) {
                $table->integer('course_name_id')->unsigned()->nullable();
                $table->foreign('course_name_id', '10190_5b65b0d1ba083')->references('id')->on('courses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('round_holes', 'course_side_id')) {
                $table->integer('course_side_id')->unsigned()->nullable();
                $table->foreign('course_side_id', '10190_5b65b0d1c1663')->references('id')->on('sides')->onDelete('cascade');
                }
                if (!Schema::hasColumn('round_holes', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '10190_5b65b0d1c8382')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('round_holes', 'round_id')) {
                $table->integer('round_id')->unsigned()->nullable();
                $table->foreign('round_id', '10190_5b65b0d1cf2e4')->references('id')->on('rounds')->onDelete('cascade');
                }
                if (!Schema::hasColumn('round_holes', 'tournament_id')) {
                $table->integer('tournament_id')->unsigned()->nullable();
                $table->foreign('tournament_id', '10190_5b65b0d1d61ba')->references('id')->on('tournaments')->onDelete('cascade');
                }
                if (!Schema::hasColumn('round_holes', 'tees_id')) {
                $table->integer('tees_id')->unsigned()->nullable();
                $table->foreign('tees_id', '10190_5b65b0d1dcfcd')->references('id')->on('tees')->onDelete('cascade');
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
        Schema::table('round_holes', function(Blueprint $table) {
            
        });
    }
}
