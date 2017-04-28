@extends('master')

    @section('content')

        <ul class="list-group">
            <li class="list-group-item"><a href="{{url('/students')}}">Show All Students</a></li>
            <li class="list-group-item"><a href="{{url('/teachers')}}">Show All Teachers</a></li>
            <li class="list-group-item"><a href="{{url('/courses')}}">Show All Courses</a></li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item"><a href="{{url('/student')}}">Show Specific Students</a></li>
            <li class="list-group-item"><a href="{{url('/teacher')}}">Show Specific Teachers</a></li>
            <li class="list-group-item"><a href="{{url('/course')}}">Show Specific Courses</a></li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item"><a href="{{url('/student/create')}}">Create Students</a></li>
            <li class="list-group-item"><a href="{{url('/teacher/create')}}">Create Teachers</a></li>
            <li class="list-group-item"><a href="{{url('/teachers/courses/create')}}">Create a Spesific Course</a></li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item"><a href="{{url('/student/update')}}">Update Students</a></li>
            <li class="list-group-item"><a href="{{url('/teacher/update')}}">Update Teachers</a></li>
            <li class="list-group-item"><a href="{{url('/teachers/courses/update')}}">Update Courses a Specific Course</a></li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item"><a href="{{url('/student/remove')}}">Delete Students</a></li>
            <li class="list-group-item"><a href="{{url('/teacher/remove')}}">Delete Teachers</a></li>
            <li class="list-group-item"><a href="{{url('/teachers/courses/remove')}}">Delete a Specific Course</a></li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item"><a href="{{url('/courses/students')}}">Show Course Students</a></li>
            <li class="list-group-item"><a href="{{url('/teachers/courses')}}">Show Teacher Courses</a></li>
            <li class="list-group-item"><a href="{{url('/courses/students/add')}}">Add a Student to a Course</a></li>
            <li class="list-group-item"><a href="{{url('/courses/students/remove')}}">Remove a Student from a Course</a></li>

        </ul>



    @endsection