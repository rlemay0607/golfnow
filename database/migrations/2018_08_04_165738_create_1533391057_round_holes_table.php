<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1533391057RoundHolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('round_holes')) {
            Schema::create('round_holes', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('hole_number')->nullable();
                $table->integer('hole_distance')->nullable();
                $table->integer('hole_handicap')->nullable();
                $table->integer('hole_par')->nullable();
                $table->integer('user_score')->nullable();
                $table->integer('user_score_handicap')->nullable();
                $table->integer('putts')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
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
        Schema::dropIfExists('round_holes');
    }
}
