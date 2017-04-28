@extends('master')

@section('content')

    <h2>All Teachers</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Profession</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->address}}</td>
                <td>{{$teacher->profession}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>


@endsection