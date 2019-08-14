<div class="table-responsive">
        <table class="table table-striped" border="1px">
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
        <table class="table table-striped" border="1px">
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
        <table class="table table-striped" border="1px">
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