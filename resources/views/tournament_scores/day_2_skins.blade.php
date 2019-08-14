<div class="table-responsive">
        <table class="table table-striped" border="1px">
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
        <table class="table table-striped" border="1px">
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