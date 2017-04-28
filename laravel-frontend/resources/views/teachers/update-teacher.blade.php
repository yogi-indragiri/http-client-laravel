@extends('master')

@section('content')

    <form action="{{url('/teacher/update')}}" method="POST" role="form">
        {{csrf_field()}}

        {{method_field('PUT')}}
        <legend>Update a Teacher</legend>

        <input type="hidden" name="id" class="form-control" value="{{$teacher->id}}">

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" placeholder="name" name="name" value="{{$teacher->name}}" required>
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" placeholder="Address"  value="{{$teacher->address}}" name="address" required>
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$teacher->phone}}" required>
        </div>

        <div class="form-group">
            <label for="">Profession</label>
            <select name="profession" class="form-control" required="required">
                <option>Select a Career</option>
                <option value="math" {{$teacher->profession == 'math' ? 'selected' : ''}}>Math</option>
                <option value="engineering" {{$teacher->profession == 'engineering' ? 'selected' : ''}}>Engineering</option>
                <option value="physics" {{$teacher->profession == 'physics' ? 'selected' : ''}}>Physics</option>
            </select>
        </div>



        <button class="btn btn-primary" type="submit" >Update</button>
    </form>

@endsection