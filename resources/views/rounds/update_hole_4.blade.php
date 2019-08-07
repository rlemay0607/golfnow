@extends('layouts.template')


@section('content')
    <div class="container">
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <form action="{{route('round.score_hole_1') }}" method="POST" >
                    {{csrf_field()}}
                    <div class="form-group" hidden>
                            <label for="round">Round Number</label>
                            <input type="text" class="form-control" id="round" name="round" value="{{$rounds->id}}" readonly>
                            <input type="text" class="form-control" id="golfer_1" name="golfer_1" value="{{$rounds->golfer_1}}" readonly>
                            <input type="text" class="form-control" id="golfer_2" name="golfer_2" value="{{$rounds->golfer_2}}" readonly>
                            <input type="text" class="form-control" id="golfer_3" name="golfer_3" value="{{$rounds->golfer_3}}" readonly>
                            <input type="text" class="form-control" id="golfer_4" name="golfer_4" value="{{$rounds->golfer_4}}" readonly>
                            <input type="text" class="form-control" id="hole" name="hole" value="{{$hole_white->hole_number}}" readonly>
                            <input type="text" class="form-control" id="score" name="score" value="{{$score_1->user_score}}">
                            <input type="text" class="form-control" id="max_hole" name="max_hole" value="{{$max_hole}}">
                        </div>
                        
                    <div class="row"><div class="col-md-4"><h3>Hole {{$hole_white->hole_number}}</h3> </div> <div class="col-md-8">PAR <b>{{$hole_white->hole_par}}</b> | 
                        @if($hole_white->blue_tees == 1) Blue @endif @if($hole_white->blue_tees == 0) White @endif <b>{{$hole_white->hole_yardage}}</b> Handicap <b>{{$hole_white->hole_handicap}}</b>| 
                        Red <b>{{$hole_red->hole_yardage}}</b> Handicap <b>{{$hole_red->hole_handicap}}</b> 
                        @if($hole_white->close_pin == 1)
                            <div class="extragame" ><b>CLOSE TO PIN</b></div>
                        @endif
                        @if($hole_white->long_drive == 1)
                            <div class="extragame" ><b>LONG DRIVE</b></div>
                        @endif
                        @if($hole_white->blue_tees == 1)
                            <div class="bluetees" ><b>BLUE TEES</b></div>
                        @endif
                        
                    </div></div>
                    <div class="table-responsive">
                        <table class="table table-striped" border="1px">
                            <thead STYLE="background-color: black; color: white">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Score</th>
                                <th scope="col">Putts</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><b>{{$rounds->golfer_1_name}}</b></td>
                                <td>
                                @if($rounds->complete_round == 0) 
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="strokes_1">
                                        <option value="0" @if($score_1->user_score ==0) selected @endif>0</option>
                                        <option value="1" @if($score_1->user_score ==1) selected @endif>1</option>
                                        <option value="2" @if($score_1->user_score ==2) selected @endif>2</option>
                                        <option value="3" @if($score_1->user_score ==3) selected @endif>3</option>
                                        <option value="4" @if($score_1->user_score ==4) selected @endif>4</option>
                                        <option value="5" @if($score_1->user_score ==5) selected @endif>5</option>
                                        <option value="6" @if($score_1->user_score ==6) selected @endif>6</option>
                                        <option value="7" @if($score_1->user_score ==7) selected @endif>7</option>
                                        <option value="8" @if($score_1->user_score ==8) selected @endif>8</option>
                                        <option value="9" @if($score_1->user_score ==9) selected @endif>9</option>
                                        <option value="10" @if($score_1->user_score ==10) selected @endif>10</option>
                                        <option value="11" @if($score_1->user_score ==11) selected @endif>11</option>
                                        <option value="12" @if($score_1->user_score ==12) selected @endif>12</option>
                                        <option value="13" @if($score_1->user_score ==13) selected @endif>13</option>
                                        <option value="14" @if($score_1->user_score ==14) selected @endif>14</option>
                                        <option value="15" @if($score_1->user_score ==15) selected @endif>15</option>
                                        <option value="16" @if($score_1->user_score ==16) selected @endif>16</option>
                                        <option value="17" @if($score_1->user_score ==17) selected @endif>17</option>
                                        <option value="18" @if($score_1->user_score ==18) selected @endif>18</option>
            
                                    </select>
                                    @endif
                                    @if($rounds->complete_round == 1)
                                    {{$score_1->user_score}}
                                    
                                    @endif
                                </td>
                                <td>@if($rounds->complete_round == 0) 
                                    @if($golfer_1_track_puts->track_putts == 1)
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="putts_1">
                                                <option value="0" @if($score_1->putts ==0) selected @endif>0</option>
                                                <option value="1" @if($score_1->putts ==1) selected @endif>1</option>
                                                <option value="2" @if($score_1->putts ==2) selected @endif>2</option>
                                                <option value="3" @if($score_1->putts ==3) selected @endif>3</option>
                                                <option value="4" @if($score_1->putts ==4) selected @endif>4</option>
                                                <option value="5" @if($score_1->putts ==5) selected @endif>5</option>
                                                <option value="6" @if($score_1->putts ==6) selected @endif>6</option>
                                                <option value="7" @if($score_1->putts ==7) selected @endif>7</option>
                                                <option value="8" @if($score_1->putts ==8) selected @endif>8</option>
                                                <option value="9" @if($score_1->putts ==9) selected @endif>9</option>
                                                <option value="10" @if($score_1->putts ==10) selected @endif>10</option>
                                                <option value="11" @if($score_1->putts ==11) selected @endif>11</option>
                                                <option value="12" @if($score_1->putts ==12) selected @endif>12</option>
                                                <option value="13" @if($score_1->putts ==13) selected @endif>13</option>
                                                <option value="14" @if($score_1->putts ==14) selected @endif>14</option>
                                                <option value="15" @if($score_1->putts ==15) selected @endif>15</option>
                                                <option value="16" @if($score_1->putts ==16) selected @endif>16</option>
                                                <option value="17" @if($score_1->putts ==17) selected @endif>17</option>
                                                <option value="18" @if($score_1->putts ==18) selected @endif>18</option>
                    
                                            </select>
                                            @endif
                                            @endif
                                            @if($rounds->complete_round == 1)
                                     {{$score_1->putts}}
                                    
                                    @endif
                                </td>
                              
                            </tr>
                            @if($rounds->golfer_2 != 'none')
                                <tr>
                                    <td><b>{{$rounds->golfer_2_name}}</b></td>
                                
                                    <td>
                                        @if($rounds->complete_round == 0) 
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="strokes_2">
                                                <option value="0" @if($score_2->user_score ==0) selected @endif>0</option>
                                                <option value="1" @if($score_2->user_score ==1) selected @endif>1</option>
                                                <option value="2" @if($score_2->user_score ==2) selected @endif>2</option>
                                                <option value="3" @if($score_2->user_score ==3) selected @endif>3</option>
                                                <option value="4" @if($score_2->user_score ==4) selected @endif>4</option>
                                                <option value="5" @if($score_2->user_score ==5) selected @endif>5</option>
                                                <option value="6" @if($score_2->user_score ==6) selected @endif>6</option>
                                                <option value="7" @if($score_2->user_score ==7) selected @endif>7</option>
                                                <option value="8" @if($score_2->user_score ==8) selected @endif>8</option>
                                                <option value="9" @if($score_2->user_score ==9) selected @endif>9</option>
                                                <option value="10" @if($score_2->user_score ==10) selected @endif>10</option>
                                                <option value="11" @if($score_2->user_score ==11) selected @endif>11</option>
                                                <option value="12" @if($score_2->user_score ==12) selected @endif>12</option>
                                                <option value="13" @if($score_2->user_score ==13) selected @endif>13</option>
                                                <option value="14" @if($score_2->user_score ==14) selected @endif>14</option>
                                                <option value="15" @if($score_2->user_score ==15) selected @endif>15</option>
                                                <option value="16" @if($score_2->user_score ==16) selected @endif>16</option>
                                                <option value="17" @if($score_2->user_score ==17) selected @endif>17</option>
                                                <option value="18" @if($score_2->user_score ==18) selected @endif>18</option>
                    
                                            </select>
                                            @endif
                                            @if($rounds->complete_round == 1)
                                            {{$score_2->user_score}}
                                            
                                            @endif
                                        </td>
                                        <td>@if($rounds->complete_round == 0) 
                                            @if($golfer_2_track_puts->track_putts == 1)
                                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="putts_2">
                                                        <option value="0" @if($score_2->putts ==0) selected @endif>0</option>
                                                        <option value="1" @if($score_2->putts ==1) selected @endif>1</option>
                                                        <option value="2" @if($score_2->putts ==2) selected @endif>2</option>
                                                        <option value="3" @if($score_2->putts ==3) selected @endif>3</option>
                                                        <option value="4" @if($score_2->putts ==4) selected @endif>4</option>
                                                        <option value="5" @if($score_2->putts ==5) selected @endif>5</option>
                                                        <option value="6" @if($score_2->putts ==6) selected @endif>6</option>
                                                        <option value="7" @if($score_2->putts ==7) selected @endif>7</option>
                                                        <option value="8" @if($score_2->putts ==8) selected @endif>8</option>
                                                        <option value="9" @if($score_2->putts ==9) selected @endif>9</option>
                                                        <option value="10" @if($score_2->putts ==10) selected @endif>10</option>
                                                        <option value="11" @if($score_2->putts ==11) selected @endif>11</option>
                                                        <option value="12" @if($score_2->putts ==12) selected @endif>12</option>
                                                        <option value="13" @if($score_2->putts ==13) selected @endif>13</option>
                                                        <option value="14" @if($score_2->putts ==14) selected @endif>14</option>
                                                        <option value="15" @if($score_2->putts ==15) selected @endif>15</option>
                                                        <option value="16" @if($score_2->putts ==16) selected @endif>16</option>
                                                        <option value="17" @if($score_2->putts ==17) selected @endif>17</option>
                                                        <option value="18" @if($score_2->putts ==18) selected @endif>18</option>
                            
                                                    </select>
                                                    @endif
                                                    @endif
                                                    @if($rounds->complete_round == 1)
                                             {{$score_2->putts}}
                                            
                                            @endif
                                        </td>
                                    
                                    
                                </tr>
    
                            @endif
                            @if($rounds->golfer_3 != 'none')
                                <tr>
                                    <td><b>{{$rounds->golfer_3_name}}</b></td>
                                    <td>
                                        @if($rounds->complete_round == 0) 
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="strokes_3">
                                                <option value="0" @if($score_3->user_score ==0) selected @endif>0</option>
                                                <option value="1" @if($score_3->user_score ==1) selected @endif>1</option>
                                                <option value="2" @if($score_3->user_score ==2) selected @endif>2</option>
                                                <option value="3" @if($score_3->user_score ==3) selected @endif>3</option>
                                                <option value="4" @if($score_3->user_score ==4) selected @endif>4</option>
                                                <option value="5" @if($score_3->user_score ==5) selected @endif>5</option>
                                                <option value="6" @if($score_3->user_score ==6) selected @endif>6</option>
                                                <option value="7" @if($score_3->user_score ==7) selected @endif>7</option>
                                                <option value="8" @if($score_3->user_score ==8) selected @endif>8</option>
                                                <option value="9" @if($score_3->user_score ==9) selected @endif>9</option>
                                                <option value="10" @if($score_3->user_score ==10) selected @endif>10</option>
                                                <option value="11" @if($score_3->user_score ==11) selected @endif>11</option>
                                                <option value="12" @if($score_3->user_score ==12) selected @endif>12</option>
                                                <option value="13" @if($score_3->user_score ==13) selected @endif>13</option>
                                                <option value="14" @if($score_3->user_score ==14) selected @endif>14</option>
                                                <option value="15" @if($score_3->user_score ==15) selected @endif>15</option>
                                                <option value="16" @if($score_3->user_score ==16) selected @endif>16</option>
                                                <option value="17" @if($score_3->user_score ==17) selected @endif>17</option>
                                                <option value="18" @if($score_3->user_score ==18) selected @endif>18</option>
                    
                                            </select>
                                            @endif
                                            @if($rounds->complete_round == 1)
                                            {{$score_3->user_score}}
                                            
                                            @endif
                                        </td>
                                        <td>@if($rounds->complete_round == 0) 
                                            @if($golfer_3_track_puts->track_putts == 1)
                                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="putts_3">
                                                        <option value="0" @if($score_3->putts ==0) selected @endif>0</option>
                                                        <option value="1" @if($score_3->putts ==1) selected @endif>1</option>
                                                        <option value="2" @if($score_3->putts ==2) selected @endif>2</option>
                                                        <option value="3" @if($score_3->putts ==3) selected @endif>3</option>
                                                        <option value="4" @if($score_3->putts ==4) selected @endif>4</option>
                                                        <option value="5" @if($score_3->putts ==5) selected @endif>5</option>
                                                        <option value="6" @if($score_3->putts ==6) selected @endif>6</option>
                                                        <option value="7" @if($score_3->putts ==7) selected @endif>7</option>
                                                        <option value="8" @if($score_3->putts ==8) selected @endif>8</option>
                                                        <option value="9" @if($score_3->putts ==9) selected @endif>9</option>
                                                        <option value="10" @if($score_3->putts ==10) selected @endif>10</option>
                                                        <option value="11" @if($score_3->putts ==11) selected @endif>11</option>
                                                        <option value="12" @if($score_3->putts ==12) selected @endif>12</option>
                                                        <option value="13" @if($score_3->putts ==13) selected @endif>13</option>
                                                        <option value="14" @if($score_3->putts ==14) selected @endif>14</option>
                                                        <option value="15" @if($score_3->putts ==15) selected @endif>15</option>
                                                        <option value="16" @if($score_3->putts ==16) selected @endif>16</option>
                                                        <option value="17" @if($score_3->putts ==17) selected @endif>17</option>
                                                        <option value="18" @if($score_3->putts ==18) selected @endif>18</option>
                            
                                                    </select>
                                                    @endif
                                                    @endif
                                                    @if($rounds->complete_round == 1)
                                             {{$score_3->putts}}
                                            
                                            @endif
                                        </td>
                                </tr>
                            @endif
                            @if($rounds->golfer_4 != 'none')
                                <tr>
                                    <td><b>{{$rounds->golfer_4_name}}</b></td>
                                    <td>
                                        @if($rounds->complete_round == 0) 
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="strokes_4">
                                                <option value="0" @if($score_4->user_score ==0) selected @endif>0</option>
                                                <option value="1" @if($score_4->user_score ==1) selected @endif>1</option>
                                                <option value="2" @if($score_4->user_score ==2) selected @endif>2</option>
                                                <option value="3" @if($score_4->user_score ==3) selected @endif>3</option>
                                                <option value="4" @if($score_4->user_score ==4) selected @endif>4</option>
                                                <option value="5" @if($score_4->user_score ==5) selected @endif>5</option>
                                                <option value="6" @if($score_4->user_score ==6) selected @endif>6</option>
                                                <option value="7" @if($score_4->user_score ==7) selected @endif>7</option>
                                                <option value="8" @if($score_4->user_score ==8) selected @endif>8</option>
                                                <option value="9" @if($score_4->user_score ==9) selected @endif>9</option>
                                                <option value="10" @if($score_4->user_score ==10) selected @endif>10</option>
                                                <option value="11" @if($score_4->user_score ==11) selected @endif>11</option>
                                                <option value="12" @if($score_4->user_score ==12) selected @endif>12</option>
                                                <option value="13" @if($score_4->user_score ==13) selected @endif>13</option>
                                                <option value="14" @if($score_4->user_score ==14) selected @endif>14</option>
                                                <option value="15" @if($score_4->user_score ==15) selected @endif>15</option>
                                                <option value="16" @if($score_4->user_score ==16) selected @endif>16</option>
                                                <option value="17" @if($score_4->user_score ==17) selected @endif>17</option>
                                                <option value="18" @if($score_4->user_score ==18) selected @endif>18</option>
                    
                                            </select>
                                            @endif
                                            @if($rounds->complete_round == 1)
                                            {{$score_4->user_score}}
                                            
                                            @endif
                                        </td>
                                        <td>@if($rounds->complete_round == 0) 
                                            @if($golfer_4_track_puts->track_putts == 1)
                                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="putts_4">
                                                        <option value="0" @if($score_4->putts ==0) selected @endif>0</option>
                                                        <option value="1" @if($score_4->putts ==1) selected @endif>1</option>
                                                        <option value="2" @if($score_4->putts ==2) selected @endif>2</option>
                                                        <option value="3" @if($score_4->putts ==3) selected @endif>3</option>
                                                        <option value="4" @if($score_4->putts ==4) selected @endif>4</option>
                                                        <option value="5" @if($score_4->putts ==5) selected @endif>5</option>
                                                        <option value="6" @if($score_4->putts ==6) selected @endif>6</option>
                                                        <option value="7" @if($score_4->putts ==7) selected @endif>7</option>
                                                        <option value="8" @if($score_4->putts ==8) selected @endif>8</option>
                                                        <option value="9" @if($score_4->putts ==9) selected @endif>9</option>
                                                        <option value="10" @if($score_4->putts ==10) selected @endif>10</option>
                                                        <option value="11" @if($score_4->putts ==11) selected @endif>11</option>
                                                        <option value="12" @if($score_4->putts ==12) selected @endif>12</option>
                                                        <option value="13" @if($score_4->putts ==13) selected @endif>13</option>
                                                        <option value="14" @if($score_4->putts ==14) selected @endif>14</option>
                                                        <option value="15" @if($score_4->putts ==15) selected @endif>15</option>
                                                        <option value="16" @if($score_4->putts ==16) selected @endif>16</option>
                                                        <option value="17" @if($score_4->putts ==17) selected @endif>17</option>
                                                        <option value="18" @if($score_4->putts ==18) selected @endif>18</option>
                            
                                                    </select>
                                                    @endif
                                                    @endif
                                                    @if($rounds->complete_round == 1)
                                             {{$score_4->putts}}
                                            
                                            @endif
                                        </td>
                                    
                                </tr>
    
                            @endif
    
                            </tbody>
                        </table>
                    </div>
                   
                   
                    <div class="form-group">
                            <a href="{{ route('round.edit_hole_3',['id' => $rounds->id]) }}" class="btn btn-xs btn-danger">
                                    Previous Hole
                                            </a>
                     
                                            @if($rounds->complete_round == 0)
                                            <button type:"submit"  class="btn btn-success">Save</button>
                                            @endif
                    <a href="{{ route('round.edit_hole_5',['id' => $rounds->id]) }}" class="btn btn-xs btn-primary">
                        
                                Next Hole
                                        </a>
                    
                       
                                    
                       
                    </div>
                </form>
            </div>
        </div>
            <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped" border="1px">
                        <thead STYLE="background-color: black; color: white">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">F</th>
                            <th scope="col">B</th>
                            <th scope="col">T</th>
                            <th scope="col">P</th>
                            <th scope="col">H</th>
                            <th>Action</th>
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
    <style>
    .extragame{
        background-color: red;
        color: white;
        max-width: 150px;
        text-align: center;
    }
    .bluetees{
        background-color: blue;
        color: white;
        max-width: 150px;
        text-align: center;
    }
 
    </style>
@endsection