@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">Create Student</div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/subject') }}">
            {{csrf_field()}}

            <!-- Personal Information -->
            <label for="grade">Grade</label>
            <input class="form-control" type="number" name="grade" required>

            <label for="subject">Subject</label>
            <input class="form-control" type="text" name="subjectCode" required>

            <label for="desc">Description</label>
            <input class="form-control" type="text" name="subjectDesc" required>

            <label for="schedTime">Time</label>
            <input class="form-control" type="time" name="schedTime" required>

            <label for="schedDay">Day</label>
            <input class="form-control" type="text" name="schedDay" required>

            <label for="room">Room</label>
            <input class="form-control" type="text" name="room" required>

            <hr>
            <div class="row">
              <div class="col-sm-6">
                <a href="{{ url('subject') }}" class="btn btn-default btn-block">Cancel</a>
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
