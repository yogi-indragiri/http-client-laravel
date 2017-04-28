@extends('master')

@section('content')

    <form action="{{url('/teacher')}}" method="POST" role="form">
        {{csrf_field()}}
        <legend>INPUT THE Teacher ID</legend>
        <div class="form-group">
            <label for="">Student Id</label>
            <input type="number" class="form-control" placeholder="The teacher Id" name="teacherId">

        </div>


        <button class="btn btn-primary" type="submit" >Submit</button>
    </form>

@endsection