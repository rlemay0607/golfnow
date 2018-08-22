<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b64735098e07RelationshipsToHoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('holes', function(Blueprint $table) {
            if (!Schema::hasColumn('holes', 'course_name_id')) {
                $table->integer('course_name_id')->unsigned()->nullable();
                $table->foreign('course_name_id', '9935_5b62e61b85c77')->references('id')->on('courses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('holes', 'tees_id')) {
                $table->integer('tees_id')->unsigned()->nullable();
                $table->foreign('tees_id', '9935_5b62e834380e7')->references('id')->on('tees')->onDelete('cascade');
                }
                if (!Schema::hasColumn('holes', 'side_id')) {
                $table->integer('side_id')->unsigned()->nullable();
                $table->foreign('side_id', '9935_5b647330b4175')->references('id')->on('sides')->onDelete('cascade');
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
        Schema::table('holes', function(Blueprint $table) {
            
        });
    }
}
