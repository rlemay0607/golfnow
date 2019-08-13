{{-- Start modal --}}
<div class="modal fade" id="golfer1Modal4" 
tabindex="-1" role="dialog" 
aria-labelledby="favoritesModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" 
    data-dismiss="modal" 
    aria-label="Close">
    
    <h4 class="modal-title" 
    id="favoritesModalLabel">{{$rounds->golfer_4_name}} Notes</h4>
</div>
<div class="modal-body">
        <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <form action="{{route('round.golfer_4_notes') }}" method="POST" >
                            {{csrf_field()}}

                            <div class="form-group" hidden>
                                    <label for="round">Round Number</label>
                                    <input type="text" class="form-control" id="round" name="round" value="{{$rounds->id}}" readonly>
                                    <input type="text" class="form-control" id="round" name="course" value="{{$rounds->course_id}}" readonly>
                                    <input type="text" class="form-control" id="golfer_1" name="golfer_1" value="{{$rounds->golfer_1}}" readonly>
                                    <input type="text" class="form-control" id="golfer_2" name="golfer_2" value="{{$rounds->golfer_2}}" readonly>
                                    <input type="text" class="form-control" id="golfer_3" name="golfer_3" value="{{$rounds->golfer_3}}" readonly>
                                    <input type="text" class="form-control" id="golfer_4" name="golfer_4" value="{{$rounds->golfer_4}}" readonly>
                                    <input type="text" class="form-control" id="hole" name="hole" value="{{$hole_white->hole_number}}" readonly>
                                   
                                    
                                </div>

                            <div class="form-group">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Notes</label>
                                    <textarea rows="4", cols="54" id="golfer_4_notes" name="golfer_4_notes" style="resize:none, "></textarea>
                                </div>
                                <div>
                                <button type="submit" class="btn btn-success" style="float: right;">
                                        Add Note
                                      </button>
                                </div>
                        </form>
                    </div>
                </div>
       
<div class="row" style="padding-top: 5px">
        <div class="table-responsive">
                <table class="table table-striped" border="1px">
                    <thead STYLE="background-color: black; color: white">
                    <tr>
                        
                        <th scope="col">Notes</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                            @foreach($golfer_4_notes as $golfer_4_note)
                    <tr>
                        
                        <td><div style="color: gray; font-size: 10px">
                                {{ Carbon\Carbon::parse($golfer_4_note->created_at)->diffForHumans()}}
                        
                        </div><div>{{$golfer_4_note->notes}}</div></td>
                        
                       
                    </tr>
                    @endforeach
                

                    </tbody>
                </table>
        </div>
    </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" 
    class="btn btn-default" 
    data-dismiss="modal">Close</button>
    <span class="pull-right">
            
    
    </span>
</div>
</div>
</div>
</div>
{{-- end modal --}}
<style>
    .notes-date{
        color: gray;
    }
</style>