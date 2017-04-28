@extends('master')

@section('content')

    <form action="{{url('/student/remove')}}" method="POST" role="form">
        {{csrf_field()}}
        <legend>Update THE STUDENT</legend>
        <div class="form-group">
            <label for="">Student Id</label>
            <select name="studentId" class="form-control" required="required">
                <option>Select a Student</option>
                @foreach($students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>

                    @endforeach
            </select>

        </div>


        <button class="btn btn-primary" type="submit" >Remove Student</button>
    </form>

@endsection