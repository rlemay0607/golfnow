<?php

namespace App\Http\Controllers;

use App\HandicapLookup;
use App\Hole;
use App\RoundHole;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Round;
use Session;

class RoundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

    }

    public function index()
    {
        //
    }

    public function details($id,$round)
    {

        return view('rounds.detail')
            ->with('holes', DB::table('round_holes')->where([['round_id', '=', $round],['user_id', '=', $id]])->get())


    ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rounds.create')
            ->with('courses', DB::table('courses')->get())
            ->with('tees', DB::table('tees')->get())
            ->with('users', DB::table('users')->get())
            ->with('tournaments', DB::table('tournaments')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {
        $golfer1hdc = User::where('id', '=',$request->golfer_1 )->first();
        $golfer2hdc = User::where('id', '=',$request->golfer_2 )->first();
        $golfer3hdc = User::where('id', '=', $request->golfer_3)->first();
        $golfer4hdc = User::where('id', '=', $request->golfer_4)->first();


if($request->golfer_1 != 'none' && $request->golfer_2 == 'none' && $request->golfer_3 == 'none' && $request->golfer_4 == 'none') {
    $round = Round::create(array(

        'course_id' => $request->course,
        'date' => $request->date,
        'golfer_1' => $request->golfer_1,
        'golfer_2' => $request->golfer_2,
        'golfer_3' => $request->golfer_3,
        'golfer_4' => $request->golfer_4,
        'golfer_1_handicap' =>$golfer1hdc->handicap,
        'golfer_1_name' =>$golfer1hdc->name,
        'tournament_day' =>$request->tournament_day,

    ));
}

        if($request->golfer_1 != 'none' && $request->golfer_2 != 'none' && $request->golfer_3 == 'none' && $request->golfer_4 == 'none') {
            $round = Round::create(array(

                'course_id' => $request->course,
                'date' => $request->date,
                'golfer_1' => $request->golfer_1,
                'golfer_2' => $request->golfer_2,
                'golfer_3' => $request->golfer_3,
                'golfer_4' => $request->golfer_4,
                'golfer_1_handicap' =>$golfer1hdc->handicap,
                'golfer_2_handicap' =>$golfer2hdc->handicap,
                'golfer_1_name' =>$golfer1hdc->name,
                'golfer_2_name' =>$golfer2hdc->name,
                'tournament_day' =>$request->tournament_day,
            ));
        }

        if($request->golfer_1 != 'none' && $request->golfer_2 != 'none' && $request->golfer_3 != 'none' && $request->golfer_4 == 'none') {
            $round = Round::create(array(

                'course_id' => $request->course,
                'date' => $request->date,
                'golfer_1' => $request->golfer_1,
                'golfer_2' => $request->golfer_2,
                'golfer_3' => $request->golfer_3,
                'golfer_4' => $request->golfer_4,
                'golfer_1_handicap' =>$golfer1hdc->handicap,
                'golfer_2_handicap' =>$golfer2hdc->handicap,
                'golfer_3_handicap' =>$golfer3hdc->handicap,
                'golfer_1_name' =>$golfer1hdc->name,
                'golfer_2_name' =>$golfer2hdc->name,
                'golfer_3_name' =>$golfer3hdc->name,
                'tournament_day' =>$request->tournament_day,
            ));
        }

        if($request->golfer_1 != 'none' && $request->golfer_2 != 'none' && $request->golfer_3 != 'none' && $request->golfer_4 != 'none') {
            $round = Round::create(array(

                'course_id' => $request->course,
                'date' => $request->date,
                'golfer_1' => $request->golfer_1,
                'golfer_2' => $request->golfer_2,
                'golfer_3' => $request->golfer_3,
                'golfer_4' => $request->golfer_4,
                'golfer_1_handicap' =>$golfer1hdc->handicap,
                'golfer_2_handicap' =>$golfer2hdc->handicap,
                'golfer_3_handicap' =>$golfer3hdc->handicap,
                'golfer_4_handicap' =>$golfer4hdc->handicap,
                'golfer_1_name' =>$golfer1hdc->name,
                'golfer_2_name' =>$golfer2hdc->name,
                'golfer_3_name' =>$golfer3hdc->name,
                'golfer_4_name' =>$golfer4hdc->name,
                'tournament_day' =>$request->tournament_day,
            ));
        }
   if($request->golfer_1 != 'none') {
        $roundholes = Hole::where([['course_name_id', '=', $request->course], ['tees_id', $request->tee_1]])->get();
        foreach ($roundholes as $roundhole)
            ([
                $hole = RoundHole::create(array(
                    'round_id' => $round->id,
                    'hole_number' => $roundhole->hole_number,
                    'course_name_id' => $request->course,
                    'hole_distance' => $roundhole->hole_yardage,
                    'hole_handicap' => $roundhole->hole_handicap,
                    'hole_par' => $roundhole->hole_par,
                    'course_side_id' =>$roundhole->side_id,
                    'user_id' => $request->golfer_1,
                    'tees_id' => $request->tee_1,
                    'user_handicap' => $round->golfer_1_handicap,
                    'golfer_1_handicap' =>$golfer1hdc->handicap,
                    'track_skins' => $request->golfer_1_skins,
                    'track_handicap_skins' => $request->golfer_1_handicap_skins,
                    'track_multiple_tournament_dates' => $request->golfer_1_2_day,
                    'tournament_id'=>$request->tournament,
                    'tournament_day' => $request->tournament_day,
                    'track_putts' => $request->golfer_1_putts,
                    'golfer_name' => $golfer1hdc->name,


                ))
            ]);

    };

        if($request->golfer_2 != 'none') {
            $roundholes2 = Hole::where([['course_name_id', '=', $request->course], ['tees_id', $request->tee_2]])->get();
            foreach ($roundholes2 as $roundhole2)
                ([
                    $hole = RoundHole::create(array(
                        'round_id' => $round->id,
                        'hole_number' => $roundhole2->hole_number,
                        'course_name_id' => $request->course,
                        'hole_distance' => $roundhole2->hole_yardage,
                        'hole_handicap' => $roundhole2->hole_handicap,
                        'hole_par' => $roundhole2->hole_par,
                        'course_side_id' =>$roundhole2->side_id,
                        'user_id' => $request->golfer_2,
                        'tees_id' => $request->tee_2,
                        'user_handicap' => $round->golfer_2_handicap,
                        'track_skins' => $request->golfer_2_skins,
                        'track_handicap_skins' => $request->golfer_2_handicap_skins,
                        'track_multiple_tournament_dates' => $request->golfer_2_2_day,
                        'track_putts' => $request->golfer_2_putts,
                        'golfer_name' => $golfer2hdc->name,

                        'golfer_2_handicap' =>$golfer2hdc->handicap,
                        'tournament_day' => $request->tournament_day,
                        'tournament_id'=>$request->tournament,
                    ))
                ]);
        };

        if($request->golfer_3 != 'none') {
            $roundholes3 = Hole::where([['course_name_id', '=', $request->course], ['tees_id', $request->tee_3]])->get();
            foreach ($roundholes3 as $roundhole3)
                ([
                    $hole = RoundHole::create(array(
                        'round_id' => $round->id,
                        'hole_number' => $roundhole3->hole_number,
                        'course_name_id' => $request->course,
                        'hole_distance' => $roundhole3->hole_yardage,
                        'hole_handicap' => $roundhole3->hole_handicap,
                        'hole_par' => $roundhole3->hole_par,
                        'course_side_id' =>$roundhole3->side_id,
                        'user_id' => $request->golfer_3,
                        'tees_id' => $request->tee_3,
                        'user_handicap' => $round->golfer_3_handicap,
                        'track_skins' => $request->golfer_3_skins,
                        'track_handicap_skins' => $request->golfer_3_handicap_skins,
                        'track_multiple_tournament_dates' => $request->golfer_3_2_day,
                        'track_putts' => $request->golfer_3_putts,
                        'golfer_name' => $golfer3hdc->name,
                        'golfer_3_handicap' =>$golfer3hdc->handicap,
                        'tournament_day' => $request->tournament_day,
                        'tournament_id'=>$request->tournament,
                    ))
                ]);
        };

        if($request->golfer_4 != 'none') {
            $roundholes4 = Hole::where([['course_name_id', '=', $request->course], ['tees_id', $request->tee_4]])->get();
            foreach ($roundholes4 as $roundhole4)
                ([
                    $hole = RoundHole::create(array(
                        'round_id' => $round->id,
                        'hole_number' => $roundhole4->hole_number,
                        'course_name_id' => $request->course,
                        'hole_distance' => $roundhole4->hole_yardage,
                        'hole_handicap' => $roundhole4->hole_handicap,
                        'hole_par' => $roundhole4->hole_par,
                        'course_side_id' =>$roundhole4->side_id,
                        'user_id' => $request->golfer_4,
                        'tees_id' => $request->tee_4,
                        'user_handicap' => $round->golfer_4_handicap,
                        'track_skins' => $request->golfer_4_skins,
                        'track_handicap_skins' => $request->golfer_4_handicap_skins,
                        'track_multiple_tournament_dates' => $request->golfer_4_2_day,
                        'track_putts' => $request->golfer_4_putts,
                        'golfer_name' => $golfer4hdc->name,
                        'golfer_4_handicap' =>$golfer4hdc->handicap,
                        'tournament_day' => $request->tournament_day,
                        'tournament_id'=>$request->tournament,
                    ))
                ]);
        };

$updatestrokes = RoundHole::where('round_id', '=', $round->id)->get();
foreach ($updatestrokes as $updatestroke)

        {
            $strokes = HandicapLookup::where([['user_handicap' , '=', $updatestroke->user_handicap ], ['hole_handicap', '=', $updatestroke->hole_handicap]])->first();
            $updatestroke->strokes = $strokes->strokes;
        $updatestroke->save();
        };

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $round = Round::find($id);
        return view('rounds.update')->with('rounds', $round)
            ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function score(Request $request)
    {
        $scores = RoundHole::where([['round_id', '=', $request->round],['hole_number', '=', $request->hole], ['user_id', '=', $request->golfer]])->get();
        foreach ($scores as $score)

        {

            $score->user_score = $request->strokes;
            $score->putts = $request->putts;
            $score->user_score_handicap = $request->strokes - $score->strokes;
            $score->save();
            Session::flash('flash_message', ('Score Submitted for '.$score->golfer_name));
        };
        $roundscores1countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores1countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores1putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer]])->sum('putts');
        $roundscores1 = Round::where([['id', '=', $request->round],['golfer_1', '=', $request->golfer]])->get();
        foreach ($roundscores1 as $roundscore1)
        {
            $roundscore1->golfer_1_front = $roundscores1countfront;
            $roundscore1->golfer_1_back = $roundscores1countback;
            $roundscore1->golfer_1_total = $roundscores1countback + $roundscores1countfront;
            $roundscore1->golfer_1_putts = $roundscores1putts;
            $roundscore1->golfer_1_hole = $request->hole;
            $roundscore1->save();
        };

        $roundscores2countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores2countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores2putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer]])->sum('putts');
        $roundscores2 = Round::where([['id', '=', $request->round],['golfer_2', '=', $request->golfer]])->get();
        foreach ($roundscores2 as $roundscore2)
        {
            $roundscore2->golfer_2_front = $roundscores2countfront;
            $roundscore2->golfer_2_back = $roundscores2countback;
            $roundscore2->golfer_2_total = $roundscores2countback + $roundscores2countfront;
            $roundscore2->golfer_2_putts = $roundscores2putts;
            $roundscore2->golfer_2_hole = $request->hole;
            $roundscore2->save();
        };

        $roundscores3countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores3countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores3putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer]])->sum('putts');
        $roundscores3 = Round::where([['id', '=', $request->round],['golfer_3', '=', $request->golfer]])->get();
        foreach ($roundscores3 as $roundscore3)
        {
            $roundscore3->golfer_3_front = $roundscores3countfront;
            $roundscore3->golfer_3_back = $roundscores3countback;
            $roundscore3->golfer_3_total = $roundscores3countback + $roundscores3countfront;
            $roundscore3->golfer_3_putts = $roundscores3putts;
            $roundscore3->golfer_3_hole = $request->hole;
            $roundscore3->save();
        };

        $roundscores4countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores4countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores4putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer]])->sum('putts');
        $roundscores4 = Round::where([['id', '=', $request->round],['golfer_4', '=', $request->golfer]])->get();
        foreach ($roundscores4 as $roundscore4)
        {
            $roundscore4->golfer_4_front = $roundscores4countfront;
            $roundscore4->golfer_4_back = $roundscores4countback;
            $roundscore4->golfer_4_total = $roundscores4countback + $roundscores4countfront;
            $roundscore4->golfer_4_putts = $roundscores4putts;
            $roundscore4->golfer_4_hole = $request->hole;
            $roundscore4->save();
        };

        return redirect()->back();
    }
}
