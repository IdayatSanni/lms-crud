@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Edit course info</h1>
    </div>
</div>
<div class="row">
  <div class="col">
    <form action="{{ route('courses.update', $course -> id) }}" method="POST">
     @method('PUT')
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="coursename" class="form-label">Course Name:</label>
          <input type="text" class="form-control" id="coursename" name="coursename" value="{{ $course -> coursename}}">
        </div>
        <div class="mb-3">
            <label for="coursecode" class="form-label">Course Code:</label>
            <input type="text" class="form-control" id="coursecode" name="coursecode" value="{{ $course -> coursecode }}">
        </div>
        <div class="mb-3">
            <label for="courseteacher" class="form-label">Course Teacher:</label>
            <input type="text" class="form-control" id="courseteacher" name="courseteacher" value="{{ $course -> courseteacher }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Course</button>      
    </form>
  </div>
</div>
@endsection