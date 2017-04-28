@extends('master')

    @section('content')

        <form action="{{url('/student')}}" method="POST" role="form">
            {{csrf_field()}}
            <legend>INPUT THE STUDENT ID</legend>
            <div class="form-group">
                <label for="">Student Id</label>
                <input type="number" class="form-control" placeholder="The student Id" name="studentId">

            </div>


            <button class="btn btn-primary" type="submit" >Submit</button>
        </form>

    @endsection