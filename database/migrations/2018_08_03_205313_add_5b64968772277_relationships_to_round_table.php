<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b64968772277RelationshipsToRoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rounds', function(Blueprint $table) {
            if (!Schema::hasColumn('rounds', 'tournment_id')) {
                $table->integer('tournment_id')->unsigned()->nullable();
                $table->foreign('tournment_id', '10100_5b649687470d8')->references('id')->on('tournaments')->onDelete('cascade');
                }
                if (!Schema::hasColumn('rounds', 'course_id')) {
                $table->integer('course_id')->unsigned()->nullable();
                $table->foreign('course_id', '10100_5b6496874b9e9')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::table('rounds', function(Blueprint $table) {
            
        });
    }
}
