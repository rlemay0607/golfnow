@extends('layouts.template')

@section('content')
    <form action="{{ route('tee.store')}}" method="post" >
        {{csrf_field()}}

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="tee">Name</label>
                        <input type="text" name="tee"  class="form-control">
                    </div>
                </div>


            </div>
        </div>



        <button type="submit" class="btn btn-primary">Create tee</button>
    </form>
    </div>
    </div>
@endsection