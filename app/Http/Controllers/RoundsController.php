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

    public function complete_round(Request $request, $id)
    {
        $round = Round::find($id);

            $round->complete_round = '1';
            $round->save();
            return redirect()->route('home');
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
        'complete_round' => 0,

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
                    'user_score' =>'0',
                    'putts' =>'0',
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
    //Display Hole 1
    public function edit($id)
    {
        $round = Round::find($id);
        $hole_number = '1';
        
       
        return view('rounds.update_hole_1')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    //Display Hole 2
    
    public function edit_hole_2($id)
    {
        $round = Round::find($id);
        $hole_number = '2';
       
       
        return view('rounds.update_hole_2')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    //Display Hole 3
    
    public function edit_hole_3($id)
    {
        $round = Round::find($id);
        $hole_number = '3';
       
       
        return view('rounds.update_hole_3')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_4($id)
    {
        $round = Round::find($id);
        $hole_number = '4';
       
       
        return view('rounds.update_hole_4')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_5($id)
    {
        $round = Round::find($id);
        $hole_number = '5';
       
       
        return view('rounds.update_hole_5')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_6($id)
    {
        $round = Round::find($id);
        $hole_number = '6';
       
       
        return view('rounds.update_hole_6')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_7($id)
    {
        $round = Round::find($id);
        $hole_number = '7';
       
       
        return view('rounds.update_hole_7')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_8($id)
    {
        $round = Round::find($id);
        $hole_number = '8';
       
       
        return view('rounds.update_hole_8')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_9($id)
    {
        $round = Round::find($id);
        $hole_number = '9';
       
       
        return view('rounds.update_hole_9')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_10($id)
    {
        $round = Round::find($id);
        $hole_number = '10';
       
       
        return view('rounds.update_hole_10')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_11($id)
    {
        $round = Round::find($id);
        $hole_number = '11';
       
       
        return view('rounds.update_hole_11')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_12($id)
    {
        $round = Round::find($id);
        $hole_number = '12';
       
       
        return view('rounds.update_hole_12')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_13($id)
    {
        $round = Round::find($id);
        $hole_number = '13';
       
       
        return view('rounds.update_hole_13')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_14($id)
    {
        $round = Round::find($id);
        $hole_number = '14';
       
       
        return view('rounds.update_hole_14')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_15($id)
    {
        $round = Round::find($id);
        $hole_number = '15';
       
       
        return view('rounds.update_hole_15')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_16($id)
    {
        $round = Round::find($id);
        $hole_number = '16';
       
       
        return view('rounds.update_hole_16')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_17($id)
    {
        $round = Round::find($id);
        $hole_number = '17';
       
       
        return view('rounds.update_hole_17')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
         ;
    }
    public function edit_hole_18($id)
    {
        $round = Round::find($id);
        $hole_number = '18';
       
       
        return view('rounds.update_hole_18')->with('rounds', $round)
        ->with('hole_white', DB::table('holes')->where([['tees_id', '=', 2], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('hole_red', DB::table('holes')->where([['tees_id', '=', 1], ['hole_number', '=', $hole_number],['course_name_id', '=', $round->course_id]])->first())
         ->with('golfer_1_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_1)->first())
         ->with('golfer_2_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_2)->first())
         ->with('golfer_3_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_3)->first())
         ->with('golfer_4_track_puts', DB::table('round_holes')->where('user_id', '=', $round->golfer_4)->first())
         ->with('score_1', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_1]])->first())
         ->with('score_2', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_2]])->first())
         ->with('score_3', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_3]])->first())
         ->with('score_4', DB::table('round_holes')->where([['round_id', '=', $round->id],['hole_number', '=', $hole_number], ['user_id', '=', $round->golfer_4]])->first())
         ->with('max_hole', DB::table('round_holes')->where([['round_id', '=', $round->id],['user_score', '>', 1]])->max('hole_number'))
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
    public function score_hole_1(Request $request)
    {
        
        //Golfer 1
        $scores_1 = RoundHole::where([['round_id', '=', $request->round],['hole_number', '=', $request->hole], ['user_id', '=', $request->golfer_1]])->get();
        foreach ($scores_1 as $score_1)

        {

            $score_1->user_score = $request->strokes_1;
            $score_1->putts = $request->putts_1;
            $score_1->user_score_handicap = $request->strokes_1 - $score_1->strokes;
            $score_1->save();
            
        };
        $roundscores1countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_1],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores1countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_1],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores1putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_1]])->sum('putts');
        $roundscores1 = Round::where([['id', '=', $request->round],['golfer_1', '=', $request->golfer_1]])->get();
        foreach ($roundscores1 as $roundscore1)
        {
            $roundscore1->golfer_1_front = $roundscores1countfront;
            $roundscore1->golfer_1_back = $roundscores1countback;
            $roundscore1->golfer_1_total = $roundscores1countback + $roundscores1countfront;
            $roundscore1->golfer_1_putts = $roundscores1putts;
            if($request->max_hole < $request->hole) {
                $roundscore1->golfer_1_hole = $request->hole;
                }
            $roundscore1->save();
        };
        //golfer 2
        $scores_2 = RoundHole::where([['round_id', '=', $request->round],['hole_number', '=', $request->hole], ['user_id', '=', $request->golfer_2]])->get();
        foreach ($scores_2 as $score_2)

        {

            $score_2->user_score = $request->strokes_2;
            $score_2->putts = $request->putts_2;
            $score_2->user_score_handicap = $request->strokes_2 - $score_2->strokes;
            $score_2->save();
            
        };
        $roundscores2countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_2],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores2countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_2],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores2putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_2]])->sum('putts');
        $roundscores2 = Round::where([['id', '=', $request->round],['golfer_2', '=', $request->golfer_2]])->get();
        foreach ($roundscores2 as $roundscore2)
        {
            $roundscore2->golfer_2_front = $roundscores2countfront;
            $roundscore2->golfer_2_back = $roundscores2countback;
            $roundscore2->golfer_2_total = $roundscores2countback + $roundscores2countfront;
            $roundscore2->golfer_2_putts = $roundscores2putts;
          
            if($request->max_hole < $request->hole) {
                $roundscore2->golfer_2_hole = $request->hole;
                }
            
           
            $roundscore2->save();
        };
        //golfer 3
        $scores_3 = RoundHole::where([['round_id', '=', $request->round],['hole_number', '=', $request->hole], ['user_id', '=', $request->golfer_3]])->get();
        foreach ($scores_3 as $score_3)

        {

            $score_3->user_score = $request->strokes_3;
            $score_3->putts = $request->putts_3;
            $score_3->user_score_handicap = $request->strokes_3 - $score_3->strokes;
            $score_3->save();
            
        };
        $roundscores3countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_3],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores3countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_3],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores3putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_3]])->sum('putts');
        $roundscores3 = Round::where([['id', '=', $request->round],['golfer_3', '=', $request->golfer_3]])->get();
        foreach ($roundscores3 as $roundscore3)
        {
            $roundscore3->golfer_3_front = $roundscores3countfront;
            $roundscore3->golfer_3_back = $roundscores3countback;
            $roundscore3->golfer_3_total = $roundscores3countback + $roundscores3countfront;
            $roundscore3->golfer_3_putts = $roundscores3putts;
            if($request->max_hole < $request->hole) {
                $roundscore3->golfer_3_hole = $request->hole;
                }
            $roundscore3->save();
        };
        //golfer 4
        $scores_4 = RoundHole::where([['round_id', '=', $request->round],['hole_number', '=', $request->hole], ['user_id', '=', $request->golfer_4]])->get();
        foreach ($scores_4 as $score_4)

        {

            $score_4->user_score = $request->strokes_4;
            $score_4->putts = $request->putts_4;
            $score_4->user_score_handicap = $request->strokes_4 - $score_4->strokes;
            $score_4->save();
           
        };
        $roundscores4countfront = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_4],['course_side_id', '=', '1']])->sum('user_score');
        $roundscores4countback = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_4],['course_side_id', '=', '2']])->sum('user_score');
        $roundscores4putts = RoundHole::where([['round_id', '=', $request->round],['user_id', '=', $request->golfer_4]])->sum('putts');
        $roundscores4 = Round::where([['id', '=', $request->round],['golfer_4', '=', $request->golfer_4]])->get();
        foreach ($roundscores4 as $roundscore4)
        {
            $roundscore4->golfer_4_front = $roundscores4countfront;
            $roundscore4->golfer_4_back = $roundscores4countback;
            $roundscore4->golfer_4_total = $roundscores4countback + $roundscores4countfront;
            $roundscore4->golfer_4_putts = $roundscores4putts;
            if($request->max_hole < $request->hole) {
                $roundscore4->golfer_4_hole = $request->hole;
                }
            $roundscore4->save();
        };
     


        return redirect()->back();
        Session::flash('flash_message', ('Score Submitted for All Golfers '));
    }
}
