<?php

namespace App\Http\Controllers;

use App\RoundHole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day1skin_hole1_max = DB::table('round_holes')->where([['hole_number', '=', '1'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole2_max = DB::table('round_holes')->where([['hole_number', '=', '2'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole3_max = DB::table('round_holes')->where([['hole_number', '=', '3'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole4_max = DB::table('round_holes')->where([['hole_number', '=', '4'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole5_max = DB::table('round_holes')->where([['hole_number', '=', '5'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole6_max = DB::table('round_holes')->where([['hole_number', '=', '6'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole7_max = DB::table('round_holes')->where([['hole_number', '=', '7'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole8_max = DB::table('round_holes')->where([['hole_number', '=', '8'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole9_max = DB::table('round_holes')->where([['hole_number', '=', '9'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole10_max = DB::table('round_holes')->where([['hole_number', '=', '10'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole11_max = DB::table('round_holes')->where([['hole_number', '=', '11'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole12_max = DB::table('round_holes')->where([['hole_number', '=', '12'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole13_max = DB::table('round_holes')->where([['hole_number', '=', '13'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole14_max = DB::table('round_holes')->where([['hole_number', '=', '14'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole15_max = DB::table('round_holes')->where([['hole_number', '=', '15'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole16_max = DB::table('round_holes')->where([['hole_number', '=', '16'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole17_max = DB::table('round_holes')->where([['hole_number', '=', '17'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');
        $day1skin_hole18_max = DB::table('round_holes')->where([['hole_number', '=', '18'],['track_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score');

        $day1skin_hole1_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '1'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole2_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '2'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole3_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '3'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole4_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '4'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole5_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '5'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole6_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '6'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole7_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '7'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole8_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '8'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole9_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '9'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole10_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '10'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole11_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '11'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole12_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '12'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole13_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '13'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole14_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '14'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole15_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '15'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole16_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '16'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole17_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '17'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');
        $day1skin_hole18_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '18'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1']])->min('user_score_handicap');

        $day2skin_hole1_max = DB::table('round_holes')->where([['hole_number', '=', '1'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole2_max = DB::table('round_holes')->where([['hole_number', '=', '2'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole3_max = DB::table('round_holes')->where([['hole_number', '=', '3'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole4_max = DB::table('round_holes')->where([['hole_number', '=', '4'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole5_max = DB::table('round_holes')->where([['hole_number', '=', '5'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole6_max = DB::table('round_holes')->where([['hole_number', '=', '6'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole7_max = DB::table('round_holes')->where([['hole_number', '=', '7'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole8_max = DB::table('round_holes')->where([['hole_number', '=', '8'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole9_max = DB::table('round_holes')->where([['hole_number', '=', '9'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole10_max = DB::table('round_holes')->where([['hole_number', '=', '10'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole11_max = DB::table('round_holes')->where([['hole_number', '=', '11'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole12_max = DB::table('round_holes')->where([['hole_number', '=', '12'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole13_max = DB::table('round_holes')->where([['hole_number', '=', '13'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole14_max = DB::table('round_holes')->where([['hole_number', '=', '14'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole15_max = DB::table('round_holes')->where([['hole_number', '=', '15'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole16_max = DB::table('round_holes')->where([['hole_number', '=', '16'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole17_max = DB::table('round_holes')->where([['hole_number', '=', '17'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');
        $day2skin_hole18_max = DB::table('round_holes')->where([['hole_number', '=', '18'],['track_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score');

        $day2skin_hole1_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '1'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole2_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '2'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole3_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '3'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole4_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '4'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole5_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '5'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole6_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '6'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole7_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '7'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole8_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '8'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole9_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '9'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole10_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '10'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole11_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '11'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole12_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '12'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole13_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '13'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole14_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '14'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole15_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '15'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole16_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '16'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole17_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '17'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');
        $day2skin_hole18_hdc_max = DB::table('round_holes')->where([['hole_number', '=', '18'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2']])->min('user_score_handicap');


        $day1round = Auth::user();
        return view('home')
            ->with('day1_skins_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole1_max]])->get())
            ->with('day1_skins_count_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole1_max]])->count())
            ->with('day1_skins_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole2_max]])->get())
            ->with('day1_skins_count_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole2_max]])->count())
            ->with('day1_skins_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole3_max]])->get())
            ->with('day1_skins_count_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole3_max]])->count())
            ->with('day1_skins_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole4_max]])->get())
            ->with('day1_skins_count_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole4_max]])->count())
           ->with('day1_skins_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole5_max]])->get())
            ->with('day1_skins_count_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole5_max]])->count())
           ->with('day1_skins_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole6_max]])->get())
            ->with('day1_skins_count_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole6_max]])->count())
           ->with('day1_skins_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole7_max]])->get())
            ->with('day1_skins_count_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole7_max]])->count())
           ->with('day1_skins_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole8_max]])->get())
            ->with('day1_skins_count_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole8_max]])->count())
           ->with('day1_skins_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole9_max]])->get())
            ->with('day1_skins_count_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole9_max]])->count())
           ->with('day1_skins_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole10_max]])->get())
            ->with('day1_skins_count_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole10_max]])->count())
           ->with('day1_skins_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole11_max]])->get())
            ->with('day1_skins_count_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole11_max]])->count())
           ->with('day1_skins_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole12_max]])->get())
            ->with('day1_skins_count_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole12_max]])->count())
           ->with('day1_skins_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole13_max]])->get())
            ->with('day1_skins_count_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole13_max]])->count())
           ->with('day1_skins_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole14_max]])->get())
            ->with('day1_skins_count_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole14_max]])->count())
           ->with('day1_skins_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole15_max]])->get())
            ->with('day1_skins_count_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole15_max]])->count())
           ->with('day1_skins_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole16_max]])->get())
            ->with('day1_skins_count_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole16_max]])->count())
           ->with('day1_skins_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole17_max]])->get())
            ->with('day1_skins_count_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole17_max]])->count())
           ->with('day1_skins_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole18_max]])->get())
            ->with('day1_skins_count_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_skins', '=', '1'],['tournament_day', '=', '1'],['user_score' ,'=', $day1skin_hole18_max]])->count())


            ->with('day1_skins_hdc_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole1_hdc_max ]])->get())
            ->with('day1_skins_hdc_count_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole1_hdc_max]])->count())
            ->with('day1_skins_hdc_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole2_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole2_hdc_max]])->count())
            ->with('day1_skins_hdc_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole3_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole3_hdc_max]])->count())
            ->with('day1_skins_hdc_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole4_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole4_hdc_max]])->count())
           ->with('day1_skins_hdc_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole5_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole5_hdc_max]])->count())
           ->with('day1_skins_hdc_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole6_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole6_hdc_max]])->count())
           ->with('day1_skins_hdc_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole7_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole7_hdc_max]])->count())
           ->with('day1_skins_hdc_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole8_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole8_hdc_max]])->count())
           ->with('day1_skins_hdc_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole9_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole9_hdc_max]])->count())
           ->with('day1_skins_hdc_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole10_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole10_hdc_max]])->count())
           ->with('day1_skins_hdc_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole11_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole11_hdc_max]])->count())
           ->with('day1_skins_hdc_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole12_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole12_hdc_max]])->count())
           ->with('day1_skins_hdc_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole13_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole13_hdc_max]])->count())
           ->with('day1_skins_hdc_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole14_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole14_hdc_max]])->count())
           ->with('day1_skins_hdc_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole15_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole15_hdc_max]])->count())
           ->with('day1_skins_hdc_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole16_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole16_hdc_max]])->count())
           ->with('day1_skins_hdc_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole17_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole17_hdc_max]])->count())
           ->with('day1_skins_hdc_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole18_hdc_max]])->get())
            ->with('day1_skins_hdc_count_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '1'],['user_score_handicap' ,'=', $day1skin_hole18_hdc_max]])->count())


            ->with('day2_skins_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole1_max]])->get())
            ->with('day2_skins_count_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole1_max]])->count())
            ->with('day2_skins_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole2_max]])->get())
            ->with('day2_skins_count_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole2_max]])->count())
            ->with('day2_skins_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole3_max]])->get())
            ->with('day2_skins_count_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole3_max]])->count())
            ->with('day2_skins_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole4_max]])->get())
            ->with('day2_skins_count_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole4_max]])->count())
            ->with('day2_skins_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole5_max]])->get())
            ->with('day2_skins_count_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole5_max]])->count())
            ->with('day2_skins_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole6_max]])->get())
            ->with('day2_skins_count_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole6_max]])->count())
            ->with('day2_skins_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole7_max]])->get())
            ->with('day2_skins_count_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole7_max]])->count())
            ->with('day2_skins_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole8_max]])->get())
            ->with('day2_skins_count_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole8_max]])->count())
            ->with('day2_skins_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole9_max]])->get())
            ->with('day2_skins_count_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole9_max]])->count())
            ->with('day2_skins_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole10_max]])->get())
            ->with('day2_skins_count_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole10_max]])->count())
            ->with('day2_skins_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole11_max]])->get())
            ->with('day2_skins_count_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole11_max]])->count())
            ->with('day2_skins_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole12_max]])->get())
            ->with('day2_skins_count_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole12_max]])->count())
            ->with('day2_skins_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole13_max]])->get())
            ->with('day2_skins_count_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole13_max]])->count())
            ->with('day2_skins_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole14_max]])->get())
            ->with('day2_skins_count_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole14_max]])->count())
            ->with('day2_skins_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole15_max]])->get())
            ->with('day2_skins_count_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole15_max]])->count())
            ->with('day2_skins_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole16_max]])->get())
            ->with('day2_skins_count_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole16_max]])->count())
            ->with('day2_skins_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole17_max]])->get())
            ->with('day2_skins_count_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole17_max]])->count())
            ->with('day2_skins_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole18_max]])->get())
            ->with('day2_skins_count_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_skins', '=', '1'],['tournament_day', '=', '2'],['user_score' ,'=', $day2skin_hole18_max]])->count())



            ->with('day2_skins_hdc_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole1_hdc_max ]])->get())
            ->with('day2_skins_hdc_count_hole1', DB::table('round_holes')->where([['hole_number', '=', '1'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole1_hdc_max]])->count())
            ->with('day2_skins_hdc_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole2_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole2', DB::table('round_holes')->where([['hole_number', '=', '2'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole2_hdc_max]])->count())
            ->with('day2_skins_hdc_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole3_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole3', DB::table('round_holes')->where([['hole_number', '=', '3'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole3_hdc_max]])->count())
            ->with('day2_skins_hdc_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole4_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole4', DB::table('round_holes')->where([['hole_number', '=', '4'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole4_hdc_max]])->count())
            ->with('day2_skins_hdc_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole5_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole5', DB::table('round_holes')->where([['hole_number', '=', '5'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole5_hdc_max]])->count())
            ->with('day2_skins_hdc_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole6_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole6', DB::table('round_holes')->where([['hole_number', '=', '6'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole6_hdc_max]])->count())
            ->with('day2_skins_hdc_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole7_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole7', DB::table('round_holes')->where([['hole_number', '=', '7'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole7_hdc_max]])->count())
            ->with('day2_skins_hdc_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole8_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole8', DB::table('round_holes')->where([['hole_number', '=', '8'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole8_hdc_max]])->count())
            ->with('day2_skins_hdc_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole9_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole9', DB::table('round_holes')->where([['hole_number', '=', '9'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole9_hdc_max]])->count())
            ->with('day2_skins_hdc_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole10_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole10', DB::table('round_holes')->where([['hole_number', '=', '10'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole10_hdc_max]])->count())
            ->with('day2_skins_hdc_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole11_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole11', DB::table('round_holes')->where([['hole_number', '=', '11'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole11_hdc_max]])->count())
            ->with('day2_skins_hdc_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole12_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole12', DB::table('round_holes')->where([['hole_number', '=', '12'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole12_hdc_max]])->count())
            ->with('day2_skins_hdc_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole13_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole13', DB::table('round_holes')->where([['hole_number', '=', '13'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole13_hdc_max]])->count())
            ->with('day2_skins_hdc_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole14_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole14', DB::table('round_holes')->where([['hole_number', '=', '14'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole14_hdc_max]])->count())
            ->with('day2_skins_hdc_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole15_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole15', DB::table('round_holes')->where([['hole_number', '=', '15'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole15_hdc_max]])->count())
            ->with('day2_skins_hdc_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole16_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole16', DB::table('round_holes')->where([['hole_number', '=', '16'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole16_hdc_max]])->count())
            ->with('day2_skins_hdc_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole17_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole17', DB::table('round_holes')->where([['hole_number', '=', '17'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole17_hdc_max]])->count())
            ->with('day2_skins_hdc_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole18_hdc_max]])->get())
            ->with('day2_skins_hdc_count_hole18', DB::table('round_holes')->where([['hole_number', '=', '18'],['track_handicap_skins', '=', '1'],['tournament_day', '=', '2'],['user_score_handicap' ,'=', $day2skin_hole18_hdc_max]])->count())





            ->with('leaderboards_2day', DB::table('2dayleaderboard_view')->orderby('score', 'asc')->get())
            ->with('twoday_putts', DB::table('2dayleaderboard_putts_view')->orderby('putts', 'asc')->get())
            ->with('leaderboards_day1', DB::table('leaderboard_view')->where('tournament_day', '=', '1')->orderby('score', 'asc')->get())
            ->with('leaderboards_day1_hdc', DB::table('leaderboard_view')->where('tournament_day', '=', '1')->orderby('handicap_score', 'asc')->get())
            ->with('leaderboards_2day_hdc', DB::table('2dayleaderboard_view')->orderby('handicap_score', 'asc')->get())
            ->with('leaderboards_day2', DB::table('leaderboard_view')->where('tournament_day', '=', '2')->orderby('score', 'asc')->get())
            ->with('leaderboards_day2_hdc', DB::table('leaderboard_view')->where('tournament_day', '=', '2')->orderby('handicap_score', 'asc')->get())
            ->with('golfer_count', DB::table('rounds')->where('tournament_day', '=','1')

                ->where(function ($r) {
                    // Nested OR condition
                    $day1round = Auth::user();
                    $r->orWhere('golfer_1', $day1round->id)->orWhere('golfer_2', $day1round->id)
                        ->orWhere('golfer_3', $day1round->id)->orWhere('golfer_4', $day1round->id);
                })

                ->count())

            ->with('golfer_2_count', DB::table('rounds')->where('tournament_day', '=','2')

                ->where(function ($r) {
                    // Nested OR condition
                    $day1round = Auth::user();
                    $r->orWhere('golfer_1', $day1round->id)->orWhere('golfer_2', $day1round->id)
                        ->orWhere('golfer_3', $day1round->id)->orWhere('golfer_4', $day1round->id);
                })

                ->count())


            ->with('golfer', DB::table('rounds')->where('tournament_day', '=','1')

                ->where(function ($r) {
                    // Nested OR condition
                    $day1round = Auth::user();
                    $r->orWhere('golfer_1', $day1round->id)->orWhere('golfer_2', $day1round->id)
                        ->orWhere('golfer_3', $day1round->id)->orWhere('golfer_4', $day1round->id);
                })

                ->first())
            ->with('golfer_2', DB::table('rounds')->where('tournament_day', '=','2')

                ->where(function ($q) {
                    // Nested OR condition
                    $day2round = Auth::user();
                    $q->orWhere('golfer_1', $day2round->id)->orWhere('golfer_2', $day2round->id)
                        ->orWhere('golfer_3', $day2round->id)->orWhere('golfer_4', $day2round->id);
                })

                ->first())


            ;

    }
}
