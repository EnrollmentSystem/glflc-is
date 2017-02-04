@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading clearfix">School Year
          <span class="badge"></span>
          <a href="{{ url('/schoolyear/create') }}" class="btn btn-primary btn-xs pull-right" style="margin-left:5px">Create</a>
          <a href="{{ url('home') }}" class="btn btn-default btn-xs pull-right">Go Back</a>
        </div>
        <div class="panel-body">
          @foreach ($schoolyears as $schoolyear)
          <!-- List group -->
          <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('schoolyear/' . $schoolyear->id) }}">{{ $schoolyear->name }}</a></li>
          </ul>
          @endforeach
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
