@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">Create School Year</div>
        <div class="panel-body">

          <form method="POST" action="{{ url('/schoolyear') }}">
            {{csrf_field()}}

            <!-- Personal Information -->
            <label for="name">School Year</label>
            <input class="form-control" id="name" type="text" name="name" required>

            <hr>
            <div class="row">
              <div class="col-sm-6">
                <a href="{{ url('home') }}" class="btn btn-default btn-block">Cancel</a>
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
