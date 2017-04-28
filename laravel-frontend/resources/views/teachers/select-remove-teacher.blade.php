@extends('master')

@section('content')

    <form action="{{url('/teacher/remove')}}" method="POST" role="form">
        {{csrf_field()}}
        <legend>Delete the Teacher</legend>
        <div class="form-group">
            <label for="">Teacher Id</label>
            <select name="studentId" class="form-control" required="required">
                <option>Select delete Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>

                @endforeach
            </select>

        </div>


        <button class="btn btn-primary" type="submit" >Remove Teacher</button>
    </form>

@endsection