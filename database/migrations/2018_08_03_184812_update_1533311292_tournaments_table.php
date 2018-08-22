<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1533311292TournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournaments', function (Blueprint $table) {
            if(Schema::hasColumn('tournaments', 'track_handicap_skins')) {
                $table->dropColumn('track_handicap_skins');
            }
            
        });
Schema::table('tournaments', function (Blueprint $table) {
            
if (!Schema::hasColumn('tournaments', 'track_handicap_skin')) {
                $table->tinyInteger('track_handicap_skin')->nullable()->default('0');
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
        Schema::table('tournaments', function (Blueprint $table) {
            $table->dropColumn('track_handicap_skin');
            
        });
Schema::table('tournaments', function (Blueprint $table) {
                        $table->string('track_handicap_skins')->nullable();
                
        });

    }
}
