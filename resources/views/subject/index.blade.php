@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading clearfix">Subjects
          <span class="badge"></span>
          <a href="{{ url('/subject/create') }}" class="btn btn-primary btn-xs pull-right">Create</a>
        </div>
        <div class="panel-body">

          @foreach ($subjects as $subject)

          <!-- List group -->
          <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('subject/' . $subject->id) }}">Grade {{ $subject->grade }}</a></li>
          </ul>

          @endforeach
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
