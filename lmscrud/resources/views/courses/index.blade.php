@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">All Courses</h1>
    </div>
</div>
<div class="row">
    @foreach($courses as $course)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $course -> coursename }}</h5>
                <hr>
                <a href="{{  route('courses.edit', $course -> id) }}">Edit</a>
                <a href="{{  route('courses.trash', $course -> id) }}">Delete</a>                
            </div>
            
        </div>
    </div>
    @endforeach
</div>
@endsection