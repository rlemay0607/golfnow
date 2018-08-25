@extends('layouts.template')


@section('content')
    <style>
        hr {

            margin-left: auto;
            margin-right: auto;
            height: 3px;
            background-color:#942226;
            opcaity: 0.5;
        }
    </style>

    <form action="{{ route('round.store')}}" method="post" >
        {{csrf_field()}}

        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Tournament</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="tournament">
                            <option selected value="none">--None--</option>
                            @foreach($tournaments as $tournament)
                                <option value="{{$tournament->id}}">{{$tournament->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Tournament Day</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="tournament_day">
                        <option value="1">1</option>
                        <option selected value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>

                    </select>
                </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-4">

                   <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Course</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="course">
                            <option selected value="none">--None--</option>
                            @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->course_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mr-sm-2" for="date" >Date</label>
                            <input class="form-control" type="date" name="date">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <hr>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Golfer</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_1">
                            <option selected value="none">--None--</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="form-group">
                         <label class="mr-sm-2" for="inlineFormCustomSelect">Tee</label>
                         <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="tee_1">
                             <option selected value="none">--None--</option>
                             @foreach($tees as $tee)
                                 <option value="{{$tee->id}}">{{$tee->tee_name}}</option>
                             @endforeach
                         </select>
                    </div>
                </div>
             </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Track Skins</label>
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_1_skins">
                                <option selected value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <div class="form-group">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Track Handicap Skins</label>
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_1_handicap_skins">
                                <option selected value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Track 2 Day Tournment</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_1_2_day">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Track Putts</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_1_putts">
                            <option selected value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <hr>
                </div>
            </div>
        </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                    <div class="form-group">
                         <label class="mr-sm-2" for="inlineFormCustomSelect">Golfer</label>
                         <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_2">
                             <option selected value="none">--None--</option>
                             @foreach($users as $user)
                                 <option value="{{$user->id}}">{{$user->name}}</option>
                             @endforeach
                         </select>
                     </div>
                 </div>

                 <div class="col-md-4">

                     <div class="form-group">
                          <label class="mr-sm-2" for="inlineFormCustomSelect">Tee</label>
                          <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="tee_2">
                              <option selected value="none">--None--</option>
                              @foreach($tees as $tee)
                                  <option value="{{$tee->id}}">{{$tee->tee_name}}</option>
                              @endforeach
                          </select>
                     </div>
                 </div>

                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="form-group">
                                 <div class="form-group">
                                     <label class="mr-sm-2" for="inlineFormCustomSelect">Track Skins</label>
                                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_2_skins">
                                         <option selected value="0">No</option>
                                         <option value="1">Yes</option>
                                     </select>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4">

                             <div class="form-group">
                                 <div class="form-group">
                                     <label class="mr-sm-2" for="inlineFormCustomSelect">Track Handicap Skins</label>
                                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_2_handicap_skins">
                                         <option selected value="0">No</option>
                                         <option value="1">Yes</option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label class="mr-sm-2" for="inlineFormCustomSelect">Track 2 Day Tournment</label>
                                 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_2_2_day">
                                     <option selected value="0">No</option>
                                     <option value="1">Yes</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label class="mr-sm-2" for="inlineFormCustomSelect">Track Putts</label>
                                 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_2_putts">
                                     <option selected value="0">No</option>
                                     <option value="1">Yes</option>
                                 </select>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="container">
                     <div class="row">
                         <div class="col-md-8">
                             <hr>
                         </div>
                     </div>
                 </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Golfer</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_3">
                            <option selected value="none">--None--</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="form-group">
                         <label class="mr-sm-2" for="inlineFormCustomSelect">Tee</label>
                         <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="tee_3">
                             <option selected value="none">--None--</option>
                             @foreach($tees as $tee)
                                 <option value="{{$tee->id}}">{{$tee->tee_name}}</option>
                             @endforeach
                         </select>
                    </div>
                </div>
            </div>
        </div>

                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="form-group">
                                 <div class="form-group">
                                     <label class="mr-sm-2" for="inlineFormCustomSelect">Track Skins</label>
                                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_3_skins">
                                         <option selected value="0">No</option>
                                         <option value="1">Yes</option>
                                     </select>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4">

                             <div class="form-group">
                                 <div class="form-group">
                                     <label class="mr-sm-2" for="inlineFormCustomSelect">Track Handicap Skins</label>
                                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_3_handicap_skins">
                                         <option selected value="0">No</option>
                                         <option value="1">Yes</option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label class="mr-sm-2" for="inlineFormCustomSelect">Track 2 Day Tournment</label>
                                 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_3_2_day">
                                     <option selected value="0">No</option>
                                     <option value="1">Yes</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label class="mr-sm-2" for="inlineFormCustomSelect">Track Putts</label>
                                 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_3_putts">
                                     <option selected value="0">No</option>
                                     <option value="1">Yes</option>
                                 </select>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="container">
                     <div class="row">
                         <div class="col-md-8">
                             <hr>
                         </div>
                     </div>
                 </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="form-group">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Golfer</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_4">
                            <option selected value="none">--None--</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="form-group">
                         <label class="mr-sm-2" for="inlineFormCustomSelect">Tee</label>
                         <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="tee_4">
                             <option selected value="none">--None--</option>
                             @foreach($tees as $tee)
                                 <option value="{{$tee->id}}">{{$tee->tee_name}}</option>
                             @endforeach
                         </select>
                    </div>
                </div>
            </div>
        </div>

                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="form-group">
                                 <div class="form-group">
                                     <label class="mr-sm-2" for="inlineFormCustomSelect">Track Skins</label>
                                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_4_skins">
                                         <option selected value="0">No</option>
                                         <option value="1">Yes</option>
                                     </select>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4">

                             <div class="form-group">
                                 <div class="form-group">
                                     <label class="mr-sm-2" for="inlineFormCustomSelect">Track Handicap Skins</label>
                                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_4_handicap_skins">
                                         <option selected value="0">No</option>
                                         <option value="1">Yes</option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label class="mr-sm-2" for="inlineFormCustomSelect">Track 2 Day Tournment</label>
                                 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_4_2_day">
                                     <option selected value="0">No</option>
                                     <option value="1">Yes</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label class="mr-sm-2" for="inlineFormCustomSelect">Track Putts</label>
                                 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="golfer_4_putts">
                                     <option selected value="0">No</option>
                                     <option value="1">Yes</option>
                                 </select>
                             </div>
                         </div>

                     </div>
                 </div>

                 <div class="container">
                     <div class="row">
                         <div class="form-group">
                             <button type="submit" class="btn btn-primary">Create Round</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


    </form>
        </div>
    </div>
@endsection