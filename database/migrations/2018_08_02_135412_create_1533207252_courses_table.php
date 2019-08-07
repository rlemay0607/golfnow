<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1533207252CoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('courses')) {
            Schema::create('courses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('city')->nullable();
                $table->string('phone_number')->nullable();
                $table->string('website')->nullable();
                $table->string('street')->nullable();
                $table->string('state')->nullable();
                $table->string('zip_code')->nullable();
                
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
        //Schema::dropIfExists('courses');
    }
}
