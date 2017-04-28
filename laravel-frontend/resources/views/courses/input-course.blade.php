@extends('master')

@section('content')

    <form action="{{url('/course')}}" method="POST" role="form">
        {{csrf_field()}}
        <legend>Input Course ID</legend>
        <div class="form-group">
            <label for="">Course Id</label>
            <input type="number" class="form-control" placeholder="The course Id" name="courseId">

        </div>


        <button class="btn btn-primary" type="submit" >Submit</button>
    </form>

@endsection