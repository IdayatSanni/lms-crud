@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Add Course</h1>
    </div>
</div>
<div class="row">
  <div class="col">
    <form action="{{ route('courses.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="coursename" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="coursename" name="coursename">
          </div>
          <div class="mb-3">
              <label for="courseteacher" class="form-label">Course Teacher</label>
              <input type="text" class="form-control" id="courseteacher" name="courseteacher">
          </div>
          <div class="mb-3">
              <label for="coursecode" class="form-label">Course Code</label>
              <input type="text" class="form-control" id="coursecode" name="coursecode">
          </div>
        <button type="submit" class="btn btn-primary">Add Course</button>      
    </form>
  </div>
</div>
@endsection