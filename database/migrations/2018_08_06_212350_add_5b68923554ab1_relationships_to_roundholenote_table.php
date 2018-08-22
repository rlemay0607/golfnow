<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b68923554ab1RelationshipsToRoundHoleNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('round_hole_notes', function(Blueprint $table) {
            if (!Schema::hasColumn('round_hole_notes', 'course_id')) {
                $table->integer('course_id')->unsigned()->nullable();
                $table->foreign('course_id', '10368_5b6892352398f')->references('id')->on('courses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('round_hole_notes', 'tees_id')) {
                $table->integer('tees_id')->unsigned()->nullable();
                $table->foreign('tees_id', '10368_5b68923529247')->references('id')->on('tees')->onDelete('cascade');
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
        Schema::table('round_hole_notes', function(Blueprint $table) {
            
        });
    }
}
