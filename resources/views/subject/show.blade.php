@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading clearfix">

          Subject
          <form class="pull-right" action="{{ url('subject/' . $subject->id) }}" method="post" style="margin-left:5px;display:inline-flex">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
          </form>
          <a href="{{ url('subject/' . $subject->id . '/edit') }}" class="btn btn-info pull-right btn-xs">Edit</a>
          <a href="{{ url('subject') }}" class="btn btn-default pull-right btn-xs" style="margin-right:5px;">Back</a>

        </div>
        <div class="panel-body">
          <div class="row">
            <!-- Personal Information -->
            <div class="col-xs-3">Grade</div>
            <div class="col-xs-9">{{ $subject->grade }}</div>

            <div class="col-xs-3">Subject</div>
            <div class="col-xs-9">{{ $subject->subjectCode }}</div>

            <div class="col-xs-3">Description</div>
            <div class="col-xs-9">{{ $subject->subjectDesc }}</div>

            <div class="col-xs-3">Time</div>
            <div class="col-xs-9">{{ $subject->schedTime }}</div>

            <div class="col-xs-3">Day</div>
            <div class="col-xs-9">{{ $subject->schedDay }}</div>

            <div class="col-xs-3">Room</div>
            <div class="col-xs-9">{{ $subject->room }}</div>

          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  @endsection
