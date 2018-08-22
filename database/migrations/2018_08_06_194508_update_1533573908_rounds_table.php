<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1533573908RoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rounds', function (Blueprint $table) {
            if(Schema::hasColumn('rounds', 'score_keeper_id')) {
                $table->dropForeign('10100_5b649c9ecb56b');
                $table->dropIndex('10100_5b649c9ecb56b');
                $table->dropColumn('score_keeper_id');
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
        Schema::table('rounds', function (Blueprint $table) {
                        
        });

    }
}
