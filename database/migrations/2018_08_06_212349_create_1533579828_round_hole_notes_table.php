<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1533579828RoundHoleNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('round_hole_notes')) {
            Schema::create('round_hole_notes', function (Blueprint $table) {
                $table->increments('id');
                $table->text('notes')->nullable();
                $table->integer('hole')->nullable();
                $table->string('user_id')->nullable();
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
        Schema::dropIfExists('round_hole_notes');
    }
}
