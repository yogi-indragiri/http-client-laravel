@extends('master')

@section('content')

    <form action="{{url('/teacher/update')}}" method="POST" role="form">
        {{csrf_field()}}
        <legend>Update the Teacher</legend>
        <div class="form-group">
            <label for="">Teacher Id</label>
            <select name="studentId" class="form-control" required="required">
                <option>Select a teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>

                @endforeach
            </select>

        </div>


        <button class="btn btn-primary" type="submit" >Select Teacher</button>
    </form>

@endsection