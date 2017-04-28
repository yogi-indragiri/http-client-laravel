@extends('master')

@section('content')

    <form action="{{url('/teacher/remove')}}" method="POST" role="form">
        {{csrf_field()}}

        {{method_field('DELETE')}}
        <legend>Delete a Teacher</legend>

        <p>Kamu mau hapus teacher ?, tolong konfirmasi...</p>

        <input type="hidden" name="id" class="form-control" value="{{$teacher->id}}">

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" placeholder="name" name="name" value="{{$teacher->name}}" required disabled>
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" placeholder="Address"  value="{{$teacher->address}}" name="address" required disabled>
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$teacher->phone}}" required disabled>
        </div>

        <div class="form-group">
            <label for="">Profession</label>
            <select name="profession" class="form-control" required="required" disabled>
                <option>Select a Career</option>
                <option value="math" {{$teacher->profession == 'math' ? 'selected' : ''}}>Math</option>
                <option value="engineering" {{$teacher->profession == 'engineering' ? 'selected' : ''}}>Engineering</option>
                <option value="physics" {{$teacher->profession == 'physics' ? 'selected' : ''}}>Physics</option>
            </select>
        </div>



        <button class="btn btn-primary" type="submit" >Delete</button>
    </form>

@endsection