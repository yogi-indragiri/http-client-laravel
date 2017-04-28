@extends('master')

@section('content')

    <form action="{{url('/student/create')}}" method="POST" role="form">
        {{csrf_field()}}
        <legend>Create a Student</legend>

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" placeholder="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" placeholder="Address" name="address" required>
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="">Career</label>
            <select name="career" class="form-control" required="required">
                <option>Select a Career</option>
                <option value="engineering">Engineering</option>
                <option value="math">Math</option>
                <option value="physics">Physics</option>
            </select>
        </div>



        <button class="btn btn-primary" type="submit" >Submit</button>
    </form>

@endsection