@extends('master')

@section('content')

    <h2>One Teacher</h2>

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


            <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->address}}</td>
                <td>{{$teacher->profession}}</td>
            </tr>

        </tbody>
    </table>


@endsection