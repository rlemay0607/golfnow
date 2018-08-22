<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1533207602HandicapLookupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('handicap_lookups')) {
            Schema::create('handicap_lookups', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('hole_handicap')->nullable()->unsigned();
                $table->integer('user_handicap')->nullable()->unsigned();
                $table->integer('strokes')->nullable()->unsigned();
                
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
        Schema::dropIfExists('handicap_lookups');
    }
}
