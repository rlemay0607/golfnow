<div class="container">
        <div class="row">
            @if($golfer_2_count != '0')
                <div class="col-md-6">

                    <div class="card text" style="height: 475px" >
                        <div class="card-header">
                            Day 2 Round
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            <div class="table-responsive">
                                <table class="table table-striped" >
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
                                {{ Carbon\Carbon::parse($golfer->date)->diffForHumans()}}
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
                            {{ Carbon\Carbon::parse($golfer->date)->diffForHumans()}}
                    </div>
                </div>

            </div>

            @endif


        </div>
    </div>