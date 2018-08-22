<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1533311205TournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('tournaments')) {
            Schema::create('tournaments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->date('date')->nullable();
                $table->text('details')->nullable();
                $table->string('number_rounds')->nullable();
                $table->tinyInteger('handicap_tournament')->nullable()->default('0');
                $table->tinyInteger('track_skins')->nullable()->default('0');
                $table->string('track_handicap_skins')->nullable();
                
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
        Schema::dropIfExists('tournaments');
    }
}
