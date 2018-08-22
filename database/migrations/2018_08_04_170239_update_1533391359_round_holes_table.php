<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1533391359RoundHolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('round_holes', function (Blueprint $table) {
            
if (!Schema::hasColumn('round_holes', 'track_multiple_tournament_dates')) {
                $table->tinyInteger('track_multiple_tournament_dates')->nullable()->default('0');
                }
if (!Schema::hasColumn('round_holes', 'track_skins')) {
                $table->tinyInteger('track_skins')->nullable()->default('0');
                }
if (!Schema::hasColumn('round_holes', 'track_handicap_skins')) {
                $table->tinyInteger('track_handicap_skins')->nullable()->default('0');
                }
if (!Schema::hasColumn('round_holes', 'track_handicap_tournament')) {
                $table->tinyInteger('track_handicap_tournament')->nullable()->default('0');
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
        Schema::table('round_holes', function (Blueprint $table) {
            $table->dropColumn('track_multiple_tournament_dates');
            $table->dropColumn('track_skins');
            $table->dropColumn('track_handicap_skins');
            $table->dropColumn('track_handicap_tournament');
            
        });

    }
}
