@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped" border="1px">
                        <thead STYLE="background-color: black; color: white">
                        <tr>
                            <th scope="col">Tournament Name</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($tournaments as $tournament)
                            
                                <tr>
                                    
                                    <td>
                                            <a href="/home" 
                            
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                                        </a>
                                        {{$tournament->name}}
                                           
                                    </td>
                                </tr>
                            @endforeach
                            
                        
                        </tbody>
                    </table>
                </div>
        </div>
        @if($rounds_count != 0)
        <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped" border="1px">
                        <thead STYLE="background-color: black; color: white">
                        <tr>
                            <th scope="col">Rounds</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($rounds as $round)
                                <tr>
                                    <td> 
                                            <a href="{{ route('round.edit',['id' => $round->id]) }}" 
                            
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                                        </a> 
                                        {{$round->course_name}} {{$rounds_count}}
                                            {{ Carbon\Carbon::parse($round->date)->diffForHumans()}}

                                            
                                    </td>
                                </tr>
                            @endforeach
                            
                        
                        </tbody>
                    </table>
                </div>
        </div>
        @endif
    </div>

</div>

@endsection