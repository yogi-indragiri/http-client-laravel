@extends('master')

@section('content')

    <form action="{{url('/teachers/courses')}}" method="POST" role="form">

        {{csrf_field()}}

        <legend>Select The Teacher</legend>
        <div class="form-group">
            <label for="">Teacher name</label>
            <select name="teacherId" class="form-control" required="required">
                <option>Select a Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>

                @endforeach
            </select>

        </div>


        <button class="btn btn-primary" type="submit">Show Teacher Courses</button>
    </form>

@endsection