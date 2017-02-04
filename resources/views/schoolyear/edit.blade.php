@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">Create Student</div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/schoolyear/' . $schoolyear->id) }}">
            {{csrf_field()}}

            <!--  -->
            <input type="hidden" name="_method" value="patch">
            <label for="name">School Year</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $schoolyear->name }}">

            <hr>
            <div class="row">
              <div class="col-sm-6">
                <a href="{{ url('schoolyear/' . $schoolyear->id) }}" class="btn btn-default btn-block">Cancel</a>
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
