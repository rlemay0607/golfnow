<div class="table-responsive">
        <table class="table table-striped" border="1px">
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
    <table class="table table-striped" border="1px">
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