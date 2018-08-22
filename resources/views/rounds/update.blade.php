@extends('layouts.template')


@section('content')
    <div class="container">
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('round.score')}}" method="post" >
                    {{csrf_field()}}

                        <div class="form-group" hidden>
                            <label for="round">Round Number</label>
                            <input type="text" class="form-control" id="round" name="round" value="{{$rounds->id}}" readonly>
                        </div>

                    <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Hole</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="hole">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>

                        </select>
                    </div>
                    <div class="form-group" >

                        <label class="mr-sm-2" for="inlineFormCustomSelect">Golfer</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer">
                            <option  value={{$rounds->golfer_1}} >{{$rounds->golfer_1_name}}</option>
                            @if($rounds->golfer_2 != 'none')
                            <option  value={{$rounds->golfer_2}}>{{$rounds->golfer_2_name}}</option>
                                @endif
                            @if($rounds->golfer_3 != 'none')
                                <option  value={{$rounds->golfer_3}}>{{$rounds->golfer_3_name}}</option>
                            @endif
                            @if($rounds->golfer_4 != 'none')
                                <option  value={{$rounds->golfer_4}}>{{$rounds->golfer_4_name}}</option>
                            @endif


                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Strokes</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="strokes">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Putts</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="putts">
                            <option value="0">0</option>
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit Score</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead STYLE="background-color: black; color: white">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Front</th>
                            <th scope="col">Back</th>
                            <th scope="col">Total</th>
                            <th scope="col">Putts</th>
                            <th scope="col">Hole</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$rounds->golfer_1_name}}</td>
                            <td>{{$rounds->golfer_1_front}}</td>
                            <td>{{$rounds->golfer_1_back}}</td>
                            <td>{{$rounds->golfer_1_total}}</td>
                            <td>{{$rounds->golfer_1_putts}}</td>
                            <td>{{$rounds->golfer_1_hole}}</td>
                            <td><a href="{{ route('round.details',['id' => $rounds->golfer_1, 'round'=>$rounds->id]) }}" class="btn btn-xs btn-info">
                                    View
                                </a></td>
                        </tr>
                        @if($rounds->golfer_2 != 'none')
                            <tr>
                                <td>{{$rounds->golfer_2_name}}</td>
                                <td>{{$rounds->golfer_2_front}}</td>
                                <td>{{$rounds->golfer_2_back}}</td>
                                <td>{{$rounds->golfer_2_total}}</td>
                                <td>{{$rounds->golfer_2_putts}}</td>
                                <td>{{$rounds->golfer_2_hole}}</td>
                                <td><a href="{{ route('round.details',['id' => $rounds->golfer_2, 'round'=>$rounds->id]) }}" class="btn btn-xs btn-info">
                                    View
                                </a></td>
                            </tr>

                        @endif
                        @if($rounds->golfer_3 != 'none')
                            <tr>
                                <td>{{$rounds->golfer_3_name}}</td>
                                <td>{{$rounds->golfer_3_front}}</td>
                                <td>{{$rounds->golfer_3_back}}</td>
                                <td>{{$rounds->golfer_3_total}}</td>
                                <td>{{$rounds->golfer_3_putts}}</td>
                                <td>{{$rounds->golfer_3_hole}}</td>
                                <td><a href="{{ route('round.details',['id' => $rounds->golfer_3, 'round'=>$rounds->id]) }}" class="btn btn-xs btn-info">
                                        View
                                    </a></td>
                            </tr>
                        @endif
                        @if($rounds->golfer_4 != 'none')
                            <tr>
                                <td>{{$rounds->golfer_4_name}}</td>
                                <td>{{$rounds->golfer_4_front}}</td>
                                <td>{{$rounds->golfer_4_back}}</td>
                                <td>{{$rounds->golfer_4_total}}</td>
                                <td>{{$rounds->golfer_4_putts}}</td>
                                <td>{{$rounds->golfer_4_hole}}</td>
                                <td><a href="{{ route('round.details',['id' => $rounds->golfer_4, 'round'=>$rounds->id]) }}" class="btn btn-xs btn-info">
                                        View
                                    </a></td>
                            </tr>

                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection