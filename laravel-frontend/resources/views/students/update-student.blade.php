@extends('master')

@section('content')

    <form action="{{url('/student/update')}}" method="POST" role="form">
        {{csrf_field()}}

        {{method_field('PUT')}}
        <legend>Update a Student</legend>

        <input type="hidden" name="id" class="form-control" value="{{$student->id}}">

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" placeholder="name" name="name" value="{{$student->name}}" required>
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" placeholder="Address"  value="{{$student->address}}" name="address" required>
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$student->phone}}" required>
        </div>

        <div class="form-group">
            <label for="">Career</label>
            <select name="career" class="form-control" required="required">
                <option>Select a Career</option>
                <option value="math" {{$student->career == 'math' ? 'selected' : ''}}>Math</option>
                <option value="engineering" {{$student->career == 'engineering' ? 'selected' : ''}}>Engineering</option>
                <option value="physics" {{$student->career == 'physics' ? 'selected' : ''}}>Physics</option>
            </select>
        </div>



        <button class="btn btn-primary" type="submit" >Update</button>
    </form>

@endsection