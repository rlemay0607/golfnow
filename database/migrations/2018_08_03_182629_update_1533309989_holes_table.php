<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1533309989HolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('holes', function (Blueprint $table) {
            
if (!Schema::hasColumn('holes', 'hole_number')) {
                $table->integer('hole_number')->nullable();
                }
if (!Schema::hasColumn('holes', 'hole_handicap')) {
                $table->integer('hole_handicap')->nullable()->unsigned();
                }
if (!Schema::hasColumn('holes', 'hole_yardage')) {
                $table->integer('hole_yardage')->nullable()->unsigned();
                }
if (!Schema::hasColumn('holes', 'hole_par')) {
                $table->integer('hole_par')->nullable()->unsigned();
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
        Schema::table('holes', function (Blueprint $table) {
            $table->dropColumn('hole_number');
            $table->dropColumn('hole_handicap');
            $table->dropColumn('hole_yardage');
            $table->dropColumn('hole_par');
            
        });

    }
}
