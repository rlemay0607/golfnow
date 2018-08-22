<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b64793cb092fRelationshipsToTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournaments', function(Blueprint $table) {
            if (!Schema::hasColumn('tournaments', 'course_id')) {
                $table->integer('course_id')->unsigned()->nullable();
                $table->foreign('course_id', '10097_5b6478e59efe5')->references('id')->on('courses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('tournaments', 'manager_id')) {
                $table->integer('manager_id')->unsigned()->nullable();
                $table->foreign('manager_id', '10097_5b6478e5a4a13')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('tournaments', function(Blueprint $table) {
            
        });
    }
}
