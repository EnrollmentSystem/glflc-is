@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">


          <div class="btn-group">
            <a href="{{url('/schoolyear')}}" type="button" class="btn btn-default">School Year</a>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              @foreach($schoolyears as $schoolyear)
              <li><a href="#">{{$schoolyear->name}}</a></li>
              @endforeach
              <li role="separator" class="divider"></li>
              <li><a href="{{ url('/schoolyear/create') }}">Create School Year</a></li>
            </ul>
          </div>

        </div> <!-- panel heading -->

        <div class="panel-body">
          <span class="badge"></span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
