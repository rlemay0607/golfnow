<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5b6477a85faebTournament2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tournament_2s');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('tournament_2s')) {
            Schema::create('tournament_2s', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->text('details')->nullable();
                $table->date('date')->nullable();
                $table->integer('number_rounds')->nullable();
                $table->tinyInteger('handicap_tournment')->nullable()->default('0');
                $table->tinyInteger('track_skins')->nullable()->default('0');
                $table->tinyInteger('track_handicap_skins')->nullable()->default('0');
                
                $table->timestamps();
                $table->softDeletes();

            $table->index(['deleted_at']);
            });
        }
    }
}
