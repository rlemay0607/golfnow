@extends('layouts.template')


@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
           @foreach($holes as $hole)
               @if($hole->user_score > 0)
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Hole: {{$hole->hole_number}}</h5>

                    <div class="card-body">
                        <p class="card-text">Distance: <b>{{$hole->hole_distance}}</b> | Par: <b>{{$hole->hole_par}}</b> | Handicap: <b>{{$hole->hole_handicap}}</b>
                            Handicap Strokes: <b>{{$hole->strokes}}</b></br>
                            Score: <b>{{$hole->user_score}}</b>
                            @if($hole->user_score > 0)
                                @if($hole->user_score - $hole->hole_par  == '-4')</b> <font color="green"><b>TRIPLE EAGLE</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  == '-3')</b> <font color="green"><b>DOUBLE EAGLE</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  == '-2')</b> <font color="green"><b>EAGLE</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  == '-1')</b> <font color="green"><b>BIRDIE</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  == '0')</b> <font color="black"><b>PAR</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  == '1')</b> <font color="red"><b>BOGEY</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  == '2')</b> <font color="red"><b>DOUBLE BOGEY</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  == '3')</b> <font color="red"><b>TRIPLE BOGY</b></font>@endif
                                @if($hole->user_score - $hole->hole_par  > '3')</b> <font color="red"><b>A LOT OVER</b></font>@endif
                            </br>
                            @endif
                            Handicap Score: <b>{{$hole->user_score_handicap}} </b>
                            @if($hole->user_score_handicap > 0)
                                @if($hole->user_score_handicap - $hole->hole_par  == '-4')</b> <font color="green"><b>TRIPLE EAGLE</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  == '-3')</b> <font color="green"><b>DOUBLE EAGLE</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  == '-2')</b> <font color="green"><b>EAGLE</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  == '-1')</b> <font color="green"><b>BIRDIE</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  == '0')</b> <font color="black"><b>PAR</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  == '1')</b> <font color="red"><b>BOGEY</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  == '2')</b> <font color="red"><b>DOUBLE BOGEY</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  == '3')</b> <font color="red"><b>TRIPLE BOGY</b></font>@endif
                                @if($hole->user_score_handicap - $hole->hole_par  > '3')</b> <font color="red"><b>A LOT OVER</b></font>@endif
                            </br>
                            @endif
                            Putts: <b>{{$hole->putts}}</b>
                        </p>


                    </div>
                </div>
            </div>
                @endif
            @endforeach

        </div>

    </div>
@endsection