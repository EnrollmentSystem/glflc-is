@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">Create Student</div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/subject/' . $subject->id) }}">
            {{csrf_field()}}

            <!--  -->
            <input type="hidden" name="_method" value="patch">
            <label for="grade">Grade</label>
            <input class="form-control" type="text" name="grade" id="grade" value="{{ $subject->grade }}">
            <label for="subjectCode">Subject</label>
            <input class="form-control" type="text" name="subjectCode" id="subjectCode" value="{{ $subject->subjectCode }}" required>
            <label for="subjectDesc">Description</label>
            <input class="form-control" type="text" name="subjectDesc" id="subjectDesc" value="{{ $subject->subjectDesc }}" required>
            <label for="time">Time</label>
            <input class="form-control" type="time" name="schedTime" id="schedTime" value="{{ $subject->schedTime }}" required>
            <label for="schedDay">Day</label>
            <input class="form-control" type="text" name="schedDay" id="schedDay" value="{{ $subject->schedDay }}" required>
            <label for="room">Room</label>
            <input class="form-control" type="text" name="room" id="room" value="{{ $subject->room }}" required>

            <hr>
            <div class="row">
              <div class="col-sm-6">
                <a href="{{ url('subject/' . $subject->id) }}" class="btn btn-default btn-block">Cancel</a>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
