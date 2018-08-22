<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create2dayPuttsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW 2dayleaderboard_putts_view AS
        (
        select user_id, golfer_name, tournament_day, track_multiple_tournament_dates,
        sum(user_score) as user_score,
        sum(user_score_handicap) as user_score_handicap,
        max(hole_number) as hole_number,
        sum(hole_par) as hole_par,
        sum(putts) as putts,
        sum(user_score) - sum(hole_par) as score,
        sum(user_score_handicap)- sum(hole_par) as handicap_score
        from round_holes where user_score>'0' and track_multiple_tournament_dates = '1' and track_putts = '1'
            GROUP BY user_id
       )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
