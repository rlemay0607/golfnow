<div class="table-responsive">
        <table class="table table-striped" border="1px">
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
                    @if($leaderboard_day2->score != 0)
                        <td>@if($leaderboard_day2->score > 0)+@endif{{$leaderboard_day2->score}}</td>
                    @endif
                    <td>{{$leaderboard_day2->hole_number}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" border="1px">
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