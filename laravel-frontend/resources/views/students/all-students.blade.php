@extends('master')

@section('content')

    <h2>All Students</h2>

      <table class="table table-striped">
        <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Address</th>
              <th>Career</th>
          </tr>
        </thead>
        <tbody>

        @foreach($students as $student)
          <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
              <td>{{$student->career}}</td>
          </tr>

         @endforeach
        </tbody>
      </table>


@endsection