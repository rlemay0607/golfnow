@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-round-tab" data-toggle="pill" href="#pills-round" role="tab" aria-controls="pills-round" aria-selected="true">My Rounds</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-1lb-tab" data-toggle="pill" href="#pills-1lb" role="tab" aria-controls="pills-1lb" aria-selected="false">Day 1 Leader Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-1skn-tab" data-toggle="pill" href="#pills-1skn" role="tab" aria-controls="pills-1skn" aria-selected="false">Day 1 Skins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2lb-tab" data-toggle="pill" href="#pills-2lb" role="tab" aria-controls="pills-2lb" aria-selected="false">Day 2 Leader Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2skn-tab" data-toggle="pill" href="#pills-2skn" role="tab" aria-controls="pills-2skn" aria-selected="false">Day 2 Skins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-2dlb-tab" data-toggle="pill" href="#pills-2dlb" role="tab" aria-controls="pills-2dlb" aria-selected="false">2 Day Leader Board</a>
                    </li>
                    <li class="nav-item">
                    <input type="button" class="btn btn-success" value="Reload Data" onClick="document.location.reload(true)">
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-round" role="tabpanel" aria-labelledby="pills-round-tab">

                        <div class="container">
                            <div class="row">
                                @if($golfer_2_count != '0')
                                    <div class="col-md-6">

                                        <div class="card text-center" style="height: 475px" >
                                            <div class="card-header">
                                                Day 2 Round
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead STYLE="background-color: black; color: white">
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">F</th>
                                                            <th scope="col">B</th>
                                                            <th scope="col">T</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>{{$golfer_2->golfer_1_name}}</td>
                                                            <td>{{$golfer_2->golfer_1_front}}</td>
                                                            <td>{{$golfer_2->golfer_1_back}}</td>
                                                            <td>{{$golfer_2->golfer_1_total}}</td>
                                                        </tr>
                                                        @if($golfer_2->golfer_2 != 'none')
                                                            <tr>
                                                                <td>{{$golfer_2->golfer_2_name}}</td>
                                                                <td>{{$golfer_2->golfer_2_front}}</td>
                                                                <td>{{$golfer_2->golfer_2_back}}</td>
                                                                <td>{{$golfer_2->golfer_2_total}}</td>
                                                            </tr>

                                                        @endif
                                                        @if($golfer_2->golfer_3 != 'none')
                                                            <tr>
                                                                <td>{{$golfer_2->golfer_3_name}}</td>
                                                                <td>{{$golfer_2->golfer_3_front}}</td>
                                                                <td>{{$golfer_2->golfer_3_back}}</td>
                                                                <td>{{$golfer_2->golfer_3_total}}</td>
                                                            </tr>
                                                        @endif
                                                        @if($golfer_2->golfer_4 != 'none')
                                                            <tr>
                                                                <td>{{$golfer_2->golfer_4_name}}</td>
                                                                <td>{{$golfer_2->golfer_4_front}}</td>
                                                                <td>{{$golfer_2->golfer_4_back}}</td>
                                                                <td>{{$golfer_2->golfer_4_total}}</td>
                                                            </tr>
                                                        @endif

                                                        </tbody>
                                                    </table>
                                                </div>

                                                </p>
                                                <a href={{ route('round.edit',['id' => $golfer_2->id]) }}"  class="btn btn-primary">Score Round</a>
                                            </div>
                                            <div class="card-footer text-muted">
                                                August 25th, 2018
                                            </div>
                                        </div>

                                    </div>
                                @endif


                                @if($golfer_count != '0')
                                <div class="col-md-6" >

                                    <div class="card text" style="height: 475px" >
                                        <div class="card-header">
                                            Day 1 Round
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead STYLE="background-color: black; color: white">
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">F</th>
                                                        <th scope="col">B</th>
                                                        <th scope="col">T</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{$golfer->golfer_1_name}}</td>
                                                        <td>{{$golfer->golfer_1_front}}</td>
                                                        <td>{{$golfer->golfer_1_back}}</td>
                                                        <td>{{$golfer->golfer_1_total}}</td>
                                                    </tr>
                                                    @if($golfer->golfer_2 != 'none')
                                                    <tr>
                                                        <td>{{$golfer->golfer_2_name}}</td>
                                                        <td>{{$golfer->golfer_2_front}}</td>
                                                        <td>{{$golfer->golfer_2_back}}</td>
                                                        <td>{{$golfer->golfer_2_total}}</td>
                                                    </tr>

                                                    @endif
                                                    @if($golfer->golfer_3 != 'none')
                                                    <tr>
                                                        <td>{{$golfer->golfer_3_name}}</td>
                                                        <td>{{$golfer->golfer_3_front}}</td>
                                                        <td>{{$golfer->golfer_3_back}}</td>
                                                        <td>{{$golfer->golfer_3_total}}</td>
                                                    </tr>
                                                    @endif
                                                    @if($golfer->golfer_4 != 'none')
                                                    <tr>
                                                        <td>{{$golfer->golfer_4_name}}</td>
                                                        <td>{{$golfer->golfer_4_front}}</td>
                                                        <td>{{$golfer->golfer_4_back}}</td>
                                                        <td>{{$golfer->golfer_4_total}}</td>
                                                    </tr>
                                                        @endif

                                                    </tbody>
                                                </table>
                                            </div>

                                            </p>
                                            <a href="{{ route('round.edit',['id' => $golfer->id]) }}" class="btn btn-primary">View Round</a>
                                        </div>
                                        <div class="card-footer text-muted">
                                            August 24th, 2018
                                        </div>
                                    </div>

                                </div>

                                @endif


                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade " id="pills-1lb" role="tabpanel" aria-labelledby="pills-1lb-tab">

                        <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead STYLE="background-color: black; color: white"><center>DAY 1 LEADER BOARD</center>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Score</th>
                                        <th scope="col">Hole</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($leaderboards_day1 as $leaderboard_day1)
                                    <tr>
                                        <td>{{$leaderboard_day1->golfer_name}}</td>
                                        @if($leaderboard_day1->score == 0)
                                            <td>EVEN</td>
                                        @endif
                                        @if($leaderboard_day1->score != 0)
                                            <td>@if($leaderboard_day1->score > 0)+@endif{{$leaderboard_day1->score}}</td>
                                        @endif
                                        <td>{{$leaderboard_day1->hole_number}}</td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: red; color: white"><center>DAY 1 HANDICAP LEADER BOARD</center>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Hole</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($leaderboards_day1_hdc as $leaderboard_day1_hdc)
                                    <tr>
                                        <td>{{$leaderboard_day1_hdc->golfer_name}}</td>
                                        @if($leaderboard_day1_hdc->handicap_score == 0)
                                            <td>EVEN</td>
                                        @endif
                                        @if($leaderboard_day1_hdc->handicap_score != 0)
                                            <td>@if($leaderboard_day1_hdc->handicap_score > 0)+@endif{{$leaderboard_day1_hdc->handicap_score}}</td>
                                        @endif
                                        <td>{{$leaderboard_day1_hdc->hole_number}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-1skn" role="tabpanel" aria-labelledby="pills-1skn-tab">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: black; color: white"><center>DAY 1 SKINS</center>
                                <tr>
                                    <th scope="col">Hole</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($day1_skins_count_hole1 == '1')
                               @foreach($day1_skins_hole1 as $day1_skin_hole1)
                                   @if($day1_skin_hole1->user_score > 0)
                                   <tr>
                                    <td>1</td>
                                    <td>{{$day1_skin_hole1->golfer_name}}</td>
                                    <td>{{$day1_skin_hole1->user_score}}</td>
                                </tr>
                                   @endif
                                @endforeach
                                    @endif

                                @if($day1_skins_count_hole2 == '1')
                                    @foreach($day1_skins_hole2 as $day1_skin_hole2)
                                        @if($day1_skin_hole2->user_score > 0)
                                        <tr>
                                            <td>2</td>
                                            <td>{{$day1_skin_hole2->golfer_name}}</td>
                                            <td>{{$day1_skin_hole2->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole3 == '1')
                                    @foreach($day1_skins_hole3 as $day1_skin_hole3)
                                        @if($day1_skin_hole3->user_score > 0)
                                        <tr>
                                            <td>3</td>
                                            <td>{{$day1_skin_hole3->golfer_name}}</td>
                                            <td>{{$day1_skin_hole3->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole4 == '1')
                                    @foreach($day1_skins_hole4 as $day1_skin_hole4)
                                        @if($day1_skin_hole4->user_score > 0)
                                        <tr>
                                            <td>4</td>
                                            <td>{{$day1_skin_hole4->golfer_name}}</td>
                                            <td>{{$day1_skin_hole4->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole5 == '1')
                                    @foreach($day1_skins_hole5 as $day1_skin_hole5)
                                        @if($day1_skin_hole5->user_score > 0)
                                        <tr>
                                            <td>5</td>
                                            <td>{{$day1_skin_hole5->golfer_name}}</td>
                                            <td>{{$day1_skin_hole5->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole6 == '1')
                                    @foreach($day1_skins_hole6 as $day1_skin_hole6)
                                        @if($day1_skin_hole6->user_score > 0)
                                        <tr>
                                            <td>6</td>
                                            <td>{{$day1_skin_hole6->golfer_name}}</td>
                                            <td>{{$day1_skin_hole6->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole7 == '1')
                                    @foreach($day1_skins_hole7 as $day1_skin_hole7)
                                        @if($day1_skin_hole7->user_score > 0)
                                        <tr>
                                            <td>7</td>
                                            <td>{{$day1_skin_hole7->golfer_name}}</td>
                                            <td>{{$day1_skin_hole7->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole8 == '1')
                                    @foreach($day1_skins_hole8 as $day1_skin_hole8)
                                        @if($day1_skin_hole8->user_score > 0)
                                        <tr>
                                            <td>8</td>
                                            <td>{{$day1_skin_hole8->golfer_name}}</td>
                                            <td>{{$day1_skin_hole8->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole9 == '1')
                                    @foreach($day1_skins_hole9 as $day1_skin_hole9)
                                        @if($day1_skin_hole9->user_score > 0)
                                        <tr>
                                            <td>9</td>
                                            <td>{{$day1_skin_hole9->golfer_name}}</td>
                                            <td>{{$day1_skin_hole9->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole10 == '1')
                                    @foreach($day1_skins_hole10 as $day1_skin_hole10)
                                        @if($day1_skin_hole10->user_score > 0)
                                        <tr>
                                            <td>10</td>
                                            <td>{{$day1_skin_hole10->golfer_name}}</td>
                                            <td>{{$day1_skin_hole10->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole11 == '1')
                                    @foreach($day1_skins_hole11 as $day1_skin_hole11)
                                        @if($day1_skin_hole11->user_score > 0)
                                        <tr>
                                            <td>11</td>
                                            <td>{{$day1_skin_hole11->golfer_name}}</td>
                                            <td>{{$day1_skin_hole11->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole12 == '1')
                                    @foreach($day1_skins_hole12 as $day1_skin_hole12)
                                        @if($day1_skin_hole12->user_score > 0)
                                        <tr>
                                            <td>12</td>
                                            <td>{{$day1_skin_hole12->golfer_name}}</td>
                                            <td>{{$day1_skin_hole12->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole13 == '1')
                                    @foreach($day1_skins_hole13 as $day1_skin_hole13)
                                        @if($day1_skin_hole13->user_score > 0)
                                        <tr>
                                            <td>13</td>
                                            <td>{{$day1_skin_hole13->golfer_name}}</td>
                                            <td>{{$day1_skin_hole13->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole14 == '1')
                                    @foreach($day1_skins_hole14 as $day1_skin_hole14)
                                        @if($day1_skin_hole14->user_score > 0)
                                        <tr>
                                            <td>14</td>
                                            <td>{{$day1_skin_hole14->golfer_name}}</td>
                                            <td>{{$day1_skin_hole14->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole15 == '1')
                                    @foreach($day1_skins_hole15 as $day1_skin_hole15)
                                        @if($day1_skin_hole15->user_score > 0)
                                        <tr>
                                            <td>15</td>
                                            <td>{{$day1_skin_hole15->golfer_name}}</td>
                                            <td>{{$day1_skin_hole15->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole16 == '1')
                                    @foreach($day1_skins_hole16 as $day1_skin_hole16)
                                        @if($day1_skin_hole16->user_score > 0)
                                        <tr>
                                            <td>16</td>
                                            <td>{{$day1_skin_hole16->golfer_name}}</td>
                                            <td>{{$day1_skin_hole16->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole17 == '1')
                                    @foreach($day1_skins_hole17 as $day1_skin_hole17)
                                        @if($day1_skin_hole17->user_score > 0)
                                        <tr>
                                            <td>17</td>
                                            <td>{{$day1_skin_hole17->golfer_name}}</td>
                                            <td>{{$day1_skin_hole17->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_count_hole18 == '1')
                                    @foreach($day1_skins_hole18 as $day1_skin_hole18)
                                        @if($day1_skin_hole18->user_score > 0)
                                        <tr>
                                            <td>18</td>
                                            <td>{{$day1_skin_hole18->golfer_name}}</td>
                                            <td>{{$day1_skin_hole18->user_score}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: red; color: white"><center>DAY 1 HANDICAP SKINS</center>
                                <tr>
                                    <th scope="col">Hole</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($day1_skins_hdc_count_hole1 == '1')
                                    @foreach($day1_skins_hdc_hole1 as $day1_skin_hdc_hole1)
                                        @if($day1_skin_hdc_hole1->user_score > 0)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$day1_skin_hdc_hole1->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole1->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                                @if($day1_skins_hdc_count_hole2 == '1')
                                    @foreach($day1_skins_hdc_hole2 as $day1_skin_hdc_hole2)
                                        @if($day1_skin_hdc_hole2->user_score > 0)
                                            <tr>
                                                <td>2</td>
                                                <td>{{$day1_skin_hdc_hole2->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole2->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole3 == '1')
                                    @foreach($day1_skins_hdc_hole3 as $day1_skin_hdc_hole3)
                                        @if($day1_skin_hdc_hole3->user_score > 0)
                                            <tr>
                                                <td>3</td>
                                                <td>{{$day1_skin_hdc_hole3->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole3->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole4 == '1')
                                    @foreach($day1_skins_hdc_hole4 as $day1_skin_hdc_hole4)
                                        @if($day1_skin_hdc_hole4->user_score > 0)
                                            <tr>
                                                <td>4</td>
                                                <td>{{$day1_skin_hdc_hole4->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole4->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole5 == '1')
                                    @foreach($day1_skins_hdc_hole5 as $day1_skin_hdc_hole5)
                                        @if($day1_skin_hdc_hole5->user_score > 0)
                                            <tr>
                                                <td>5</td>
                                                <td>{{$day1_skin_hdc_hole5->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole5->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole6 == '1')
                                    @foreach($day1_skins_hdc_hole6 as $day1_skin_hdc_hole6)
                                        @if($day1_skin_hdc_hole6->user_score > 0)
                                            <tr>
                                                <td>6</td>
                                                <td>{{$day1_skin_hdc_hole6->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole6->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole7 == '1')
                                    @foreach($day1_skins_hdc_hole7 as $day1_skin_hdc_hole7)
                                        @if($day1_skin_hdc_hole7->user_score > 0)
                                            <tr>
                                                <td>7</td>
                                                <td>{{$day1_skin_hdc_hole7->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole7->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole8 == '1')
                                    @foreach($day1_skins_hdc_hole8 as $day1_skin_hdc_hole8)
                                        @if($day1_skin_hdc_hole8->user_score > 0)
                                            <tr>
                                                <td>8</td>
                                                <td>{{$day1_skin_hdc_hole8->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole8->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole9 == '1')
                                    @foreach($day1_skins_hdc_hole9 as $day1_skin_hdc_hole9)
                                        @if($day1_skin_hdc_hole9->user_score > 0)
                                            <tr>
                                                <td>9</td>
                                                <td>{{$day1_skin_hdc_hole9->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole9->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole10 == '1')
                                    @foreach($day1_skins_hdc_hole10 as $day1_skin_hdc_hole10)
                                        @if($day1_skin_hdc_hole10->user_score > 0)
                                            <tr>
                                                <td>10</td>
                                                <td>{{$day1_skin_hdc_hole10->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole10->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole11 == '1')
                                    @foreach($day1_skins_hdc_hole11 as $day1_skin_hdc_hole11)
                                        @if($day1_skin_hdc_hole11->user_score > 0)
                                            <tr>
                                                <td>11</td>
                                                <td>{{$day1_skin_hdc_hole11->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole11->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole12 == '1')
                                    @foreach($day1_skins_hdc_hole12 as $day1_skin_hdc_hole12)
                                        @if($day1_skin_hdc_hole12->user_score > 0)
                                            <tr>
                                                <td>12</td>
                                                <td>{{$day1_skin_hdc_hole12->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole12->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole13 == '1')
                                    @foreach($day1_skins_hdc_hole13 as $day1_skin_hdc_hole13)
                                        @if($day1_skin_hdc_hole13->user_score > 0)
                                            <tr>
                                                <td>13</td>
                                                <td>{{$day1_skin_hdc_hole13->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole13->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole14 == '1')
                                    @foreach($day1_skins_hdc_hole14 as $day1_skin_hdc_hole14)
                                        @if($day1_skin_hdc_hole14->user_score > 0)
                                            <tr>
                                                <td>14</td>
                                                <td>{{$day1_skin_hdc_hole14->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole14->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole15 == '1')
                                    @foreach($day1_skins_hdc_hole15 as $day1_skin_hdc_hole15)
                                        @if($day1_skin_hdc_hole15->user_score > 0)
                                            <tr>
                                                <td>15</td>
                                                <td>{{$day1_skin_hdc_hole15->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole15->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole16 == '1')
                                    @foreach($day1_skins_hdc_hole16 as $day1_skin_hdc_hole16)
                                        @if($day1_skin_hdc_hole16->user_score > 0)
                                            <tr>
                                                <td>16</td>
                                                <td>{{$day1_skin_hdc_hole16->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole16->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole17 == '1')
                                    @foreach($day1_skins_hdc_hole17 as $day1_skin_hdc_hole17)
                                        @if($day1_skin_hdc_hole17->user_score > 0)
                                            <tr>
                                                <td>17</td>
                                                <td>{{$day1_skin_hdc_hole17->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole17->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day1_skins_hdc_count_hole18 == '1')
                                    @foreach($day1_skins_hdc_hole18 as $day1_skin_hdc_hole18)
                                        @if($day1_skin_hdc_hole18->user_score > 0)
                                            <tr>
                                                <td>18</td>
                                                <td>{{$day1_skin_hdc_hole18->golfer_name}}</td>
                                                <td>{{$day1_skin_hdc_hole18->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="pills-2lb" role="tabpanel" aria-labelledby="pills-2lb-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: black; color: white"><center>DAY 2 LEADER BOARD</center>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Hole</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($leaderboards_day2 as $leaderboard_day2)
                                    <tr>
                                        <td>{{$leaderboard_day2->golfer_name}}</td>
                                        @if($leaderboard_day2->score == 0)
                                            <td>EVEN</td>
                                        @endif
                                        @if($leaderboard_day2->handicap_score != 0)
                                            <td>@if($leaderboard_day2->score > 0)+@endif{{$leaderboard_day2->score}}</td>
                                        @endif
                                        <td>{{$leaderboard_day2->hole_number}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: red; color: white"><center>DAY 2 HANDICAP LEADER BOARD</center>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Hole</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($leaderboards_day2_hdc as $leaderboard_day2_hdc)
                                    <tr>
                                        <td>{{$leaderboard_day2_hdc->golfer_name}}</td>
                                        @if($leaderboard_day2_hdc->handicap_score == 0)
                                            <td>EVEN</td>
                                        @endif
                                        @if($leaderboard_day2_hdc->handicap_score != 0)
                                            <td>@if($leaderboard_day2_hdc->handicap_score > 0)+@endif{{$leaderboard_day2_hdc->handicap_score}}</td>
                                        @endif
                                        <td>{{$leaderboard_day2_hdc->hole_number}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-2skn" role="tabpanel" aria-labelledby="pills-2skn-tab">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: black; color: white"><center>DAY 2 SKINS</center>
                                <tr>
                                    <th scope="col">Hole</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($day2_skins_count_hole1 == '1')
                                    @foreach($day2_skins_hole1 as $day2_skin_hole1)
                                        @if($day2_skin_hole1->user_score > 0)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$day2_skin_hole1->golfer_name}}</td>
                                                <td>{{$day2_skin_hole1->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                                @if($day2_skins_count_hole2 == '1')
                                    @foreach($day2_skins_hole2 as $day2_skin_hole2)
                                        @if($day2_skin_hole2->user_score > 0)
                                            <tr>
                                                <td>2</td>
                                                <td>{{$day2_skin_hole2->golfer_name}}</td>
                                                <td>{{$day2_skin_hole2->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole3 == '1')
                                    @foreach($day2_skins_hole3 as $day2_skin_hole3)
                                        @if($day2_skin_hole3->user_score > 0)
                                            <tr>
                                                <td>3</td>
                                                <td>{{$day2_skin_hole3->golfer_name}}</td>
                                                <td>{{$day2_skin_hole3->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole4 == '1')
                                    @foreach($day2_skins_hole4 as $day2_skin_hole4)
                                        @if($day2_skin_hole4->user_score > 0)
                                            <tr>
                                                <td>4</td>
                                                <td>{{$day2_skin_hole4->golfer_name}}</td>
                                                <td>{{$day2_skin_hole4->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole5 == '1')
                                    @foreach($day2_skins_hole5 as $day2_skin_hole5)
                                        @if($day2_skin_hole5->user_score > 0)
                                            <tr>
                                                <td>5</td>
                                                <td>{{$day2_skin_hole5->golfer_name}}</td>
                                                <td>{{$day2_skin_hole5->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole6 == '1')
                                    @foreach($day2_skins_hole6 as $day2_skin_hole6)
                                        @if($day2_skin_hole6->user_score > 0)
                                            <tr>
                                                <td>6</td>
                                                <td>{{$day2_skin_hole6->golfer_name}}</td>
                                                <td>{{$day2_skin_hole6->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole7 == '1')
                                    @foreach($day2_skins_hole7 as $day2_skin_hole7)
                                        @if($day2_skin_hole7->user_score > 0)
                                            <tr>
                                                <td>7</td>
                                                <td>{{$day2_skin_hole7->golfer_name}}</td>
                                                <td>{{$day2_skin_hole7->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole8 == '1')
                                    @foreach($day2_skins_hole8 as $day2_skin_hole8)
                                        @if($day2_skin_hole8->user_score > 0)
                                            <tr>
                                                <td>8</td>
                                                <td>{{$day2_skin_hole8->golfer_name}}</td>
                                                <td>{{$day2_skin_hole8->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole9 == '1')
                                    @foreach($day2_skins_hole9 as $day2_skin_hole9)
                                        @if($day2_skin_hole9->user_score > 0)
                                            <tr>
                                                <td>9</td>
                                                <td>{{$day2_skin_hole9->golfer_name}}</td>
                                                <td>{{$day2_skin_hole9->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole10 == '1')
                                    @foreach($day2_skins_hole10 as $day2_skin_hole10)
                                        @if($day2_skin_hole10->user_score > 0)
                                            <tr>
                                                <td>10</td>
                                                <td>{{$day2_skin_hole10->golfer_name}}</td>
                                                <td>{{$day2_skin_hole10->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole11 == '1')
                                    @foreach($day2_skins_hole11 as $day2_skin_hole11)
                                        @if($day2_skin_hole11->user_score > 0)
                                            <tr>
                                                <td>11</td>
                                                <td>{{$day2_skin_hole11->golfer_name}}</td>
                                                <td>{{$day2_skin_hole11->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole12 == '1')
                                    @foreach($day2_skins_hole12 as $day2_skin_hole12)
                                        @if($day2_skin_hole12->user_score > 0)
                                            <tr>
                                                <td>12</td>
                                                <td>{{$day2_skin_hole12->golfer_name}}</td>
                                                <td>{{$day2_skin_hole12->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole13 == '1')
                                    @foreach($day2_skins_hole13 as $day2_skin_hole13)
                                        @if($day2_skin_hole13->user_score > 0)
                                            <tr>
                                                <td>13</td>
                                                <td>{{$day2_skin_hole13->golfer_name}}</td>
                                                <td>{{$day2_skin_hole13->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole14 == '1')
                                    @foreach($day2_skins_hole14 as $day2_skin_hole14)
                                        @if($day2_skin_hole14->user_score > 0)
                                            <tr>
                                                <td>14</td>
                                                <td>{{$day2_skin_hole14->golfer_name}}</td>
                                                <td>{{$day2_skin_hole14->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole15 == '1')
                                    @foreach($day2_skins_hole15 as $day2_skin_hole15)
                                        @if($day2_skin_hole15->user_score > 0)
                                            <tr>
                                                <td>15</td>
                                                <td>{{$day2_skin_hole15->golfer_name}}</td>
                                                <td>{{$day2_skin_hole15->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole16 == '1')
                                    @foreach($day2_skins_hole16 as $day2_skin_hole16)
                                        @if($day2_skin_hole16->user_score > 0)
                                            <tr>
                                                <td>16</td>
                                                <td>{{$day2_skin_hole16->golfer_name}}</td>
                                                <td>{{$day2_skin_hole16->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole17 == '1')
                                    @foreach($day2_skins_hole17 as $day2_skin_hole17)
                                        @if($day2_skin_hole17->user_score > 0)
                                            <tr>
                                                <td>17</td>
                                                <td>{{$day2_skin_hole17->golfer_name}}</td>
                                                <td>{{$day2_skin_hole17->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_count_hole18 == '1')
                                    @foreach($day2_skins_hole18 as $day2_skin_hole18)
                                        @if($day2_skin_hole18->user_score > 0)
                                            <tr>
                                                <td>18</td>
                                                <td>{{$day2_skin_hole18->golfer_name}}</td>
                                                <td>{{$day2_skin_hole18->user_score}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: red; color: white"><center>DAY 2 HANDICAP SKINS</center>
                                <tr>
                                    <th scope="col">Hole</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($day2_skins_hdc_count_hole1 == '1')
                                    @foreach($day2_skins_hdc_hole1 as $day2_skin_hdc_hole1)
                                        @if($day2_skin_hdc_hole1->user_score > 0)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$day2_skin_hdc_hole1->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole1->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                                @if($day2_skins_hdc_count_hole2 == '1')
                                    @foreach($day2_skins_hdc_hole2 as $day2_skin_hdc_hole2)
                                        @if($day2_skin_hdc_hole2->user_score > 0)
                                            <tr>
                                                <td>2</td>
                                                <td>{{$day2_skin_hdc_hole2->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole2->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole3 == '1')
                                    @foreach($day2_skins_hdc_hole3 as $day2_skin_hdc_hole3)
                                        @if($day2_skin_hdc_hole3->user_score > 0)
                                            <tr>
                                                <td>3</td>
                                                <td>{{$day2_skin_hdc_hole3->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole3->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole4 == '1')
                                    @foreach($day2_skins_hdc_hole4 as $day2_skin_hdc_hole4)
                                        @if($day2_skin_hdc_hole4->user_score > 0)
                                            <tr>
                                                <td>4</td>
                                                <td>{{$day2_skin_hdc_hole4->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole4->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole5 == '1')
                                    @foreach($day2_skins_hdc_hole5 as $day2_skin_hdc_hole5)
                                        @if($day2_skin_hdc_hole5->user_score > 0)
                                            <tr>
                                                <td>5</td>
                                                <td>{{$day2_skin_hdc_hole5->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole5->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole6 == '1')
                                    @foreach($day2_skins_hdc_hole6 as $day2_skin_hdc_hole6)
                                        @if($day2_skin_hdc_hole6->user_score > 0)
                                            <tr>
                                                <td>6</td>
                                                <td>{{$day2_skin_hdc_hole6->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole6->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole7 == '1')
                                    @foreach($day2_skins_hdc_hole7 as $day2_skin_hdc_hole7)
                                        @if($day2_skin_hdc_hole7->user_score > 0)
                                            <tr>
                                                <td>7</td>
                                                <td>{{$day2_skin_hdc_hole7->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole7->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole8 == '1')
                                    @foreach($day2_skins_hdc_hole8 as $day2_skin_hdc_hole8)
                                        @if($day2_skin_hdc_hole8->user_score > 0)
                                            <tr>
                                                <td>8</td>
                                                <td>{{$day2_skin_hdc_hole8->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole8->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole9 == '1')
                                    @foreach($day2_skins_hdc_hole9 as $day2_skin_hdc_hole9)
                                        @if($day2_skin_hdc_hole9->user_score > 0)
                                            <tr>
                                                <td>9</td>
                                                <td>{{$day2_skin_hdc_hole9->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole9->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole10 == '1')
                                    @foreach($day2_skins_hdc_hole10 as $day2_skin_hdc_hole10)
                                        @if($day2_skin_hdc_hole10->user_score > 0)
                                            <tr>
                                                <td>10</td>
                                                <td>{{$day2_skin_hdc_hole10->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole10->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole11 == '1')
                                    @foreach($day2_skins_hdc_hole11 as $day2_skin_hdc_hole11)
                                        @if($day2_skin_hdc_hole11->user_score > 0)
                                            <tr>
                                                <td>11</td>
                                                <td>{{$day2_skin_hdc_hole11->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole11->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole12 == '1')
                                    @foreach($day2_skins_hdc_hole12 as $day2_skin_hdc_hole12)
                                        @if($day2_skin_hdc_hole12->user_score > 0)
                                            <tr>
                                                <td>12</td>
                                                <td>{{$day2_skin_hdc_hole12->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole12->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole13 == '1')
                                    @foreach($day2_skins_hdc_hole13 as $day2_skin_hdc_hole13)
                                        @if($day2_skin_hdc_hole13->user_score > 0)
                                            <tr>
                                                <td>13</td>
                                                <td>{{$day2_skin_hdc_hole13->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole13->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole14 == '1')
                                    @foreach($day2_skins_hdc_hole14 as $day2_skin_hdc_hole14)
                                        @if($day2_skin_hdc_hole14->user_score > 0)
                                            <tr>
                                                <td>14</td>
                                                <td>{{$day2_skin_hdc_hole14->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole14->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole15 == '1')
                                    @foreach($day2_skins_hdc_hole15 as $day2_skin_hdc_hole15)
                                        @if($day2_skin_hdc_hole15->user_score > 0)
                                            <tr>
                                                <td>15</td>
                                                <td>{{$day2_skin_hdc_hole15->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole15->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole16 == '1')
                                    @foreach($day2_skins_hdc_hole16 as $day2_skin_hdc_hole16)
                                        @if($day2_skin_hdc_hole16->user_score > 0)
                                            <tr>
                                                <td>16</td>
                                                <td>{{$day2_skin_hdc_hole16->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole16->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole17 == '1')
                                    @foreach($day2_skins_hdc_hole17 as $day2_skin_hdc_hole17)
                                        @if($day2_skin_hdc_hole17->user_score > 0)
                                            <tr>
                                                <td>17</td>
                                                <td>{{$day2_skin_hdc_hole17->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole17->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if($day2_skins_hdc_count_hole18 == '1')
                                    @foreach($day2_skins_hdc_hole18 as $day2_skin_hdc_hole18)
                                        @if($day2_skin_hdc_hole18->user_score > 0)
                                            <tr>
                                                <td>18</td>
                                                <td>{{$day2_skin_hdc_hole18->golfer_name}}</td>
                                                <td>{{$day2_skin_hdc_hole18->user_score_handicap}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-2dlb" role="tabpanel" aria-labelledby="pills-2dlb-tab">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: black; color: white"><center>2 DAY LEADER BOARD</center>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Hole</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($leaderboards_2day as $leaderboard_2day)
                                    <tr>
                                        <td>{{$leaderboard_2day->golfer_name}}</td>
                                        @if($leaderboard_2day->score == 0)
                                            <td>EVEN</td>
                                        @endif
                                        @if($leaderboard_2day->score != 0)
                                            <td>@if($leaderboard_2day->score > 0)+@endif{{$leaderboard_2day->score}}</td>
                                        @endif
                                        <td>{{$leaderboard_2day->hole_number}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: red; color: white"><center>2 DAY HANDICAP LEADER BOARD</center>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Hole</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($leaderboards_2day_hdc as $leaderboard_2day_hdc)
                                    <tr>
                                        <td>{{$leaderboard_2day_hdc->golfer_name}}</td>
                                        @if($leaderboard_2day_hdc->handicap_score == 0)
                                            <td>EVEN</td>
                                        @endif
                                        @if($leaderboard_2day_hdc->handicap_score != 0)
                                            <td>@if($leaderboard_2day_hdc->handicap_score > 0)+@endif{{$leaderboard_2day_hdc->handicap_score}}</td>
                                        @endif
                                        <td>{{$leaderboard_2day_hdc->hole_number}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead STYLE="background-color: rebeccapurple; color: white"><center>2 DAY PUTTS</center>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Putts</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($twoday_putts as $twoday_putt)
                                <tr>
                                    <td>{{$twoday_putt->golfer_name}}</td>
                                    <td>{{$twoday_putt->putts}}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
