<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b62e61ba8098RelationshipsToHoleTable extends Migration
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
