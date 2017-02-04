@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading clearfix">

          School Year
          <form class="pull-right" action="{{ url('schoolyear/' . $schoolyear->id) }}" method="post" style="margin-left:5px;display:inline-flex">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
          </form>
          <a href="{{ url('schoolyear/' . $schoolyear->id . '/edit') }}" class="btn btn-info pull-right btn-xs">Edit</a>
          <a href="{{ url('schoolyear') }}" class="btn btn-default pull-right btn-xs" style="margin-right:5px;">Back</a>

        </div>
        <div class="panel-body">
          <div class="row">
            <!-- Personal Information -->
            <div class="col-xs-9">{{ $schoolyear->name }}</div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  @endsection
