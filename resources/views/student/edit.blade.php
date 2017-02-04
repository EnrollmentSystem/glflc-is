@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">Edit Student</div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/student/' . $student->id) }}">
            {{csrf_field()}}

            <!-- Personal Information -->
            <h4 style="margin-bottom:15px;">Personal Information</h4>
            <input type="hidden" name="_method" value="patch">

            <label for="schoolyear_id" class="form-spacing-top">School Year</label>
            <select class="form-control" name="schoolyear_id" required>
              @foreach($schoolyears as $schoolyear)
              <<option value="{{$schoolyear->id}}">{{$schoolyear->name}}</option>
              @endforeach
            </select>

            <label for="fname">First name</label>
            <input class="form-control" type="text" name="fname" id="fname" value="{{ $student->fname }}" required>

            <label for="mname">Middle name</label>
            <input class="form-control" type="text" name="mname" id="mname" value="{{ $student->mname }}" required>

            <label for="lname">Last name</label>
            <input class="form-control" type="text" name="lname" id="lname" value="{{ $student->lname }}" required>

            <label for="age">Age</label>
            <input class="form-control" type="number" name="age" id="age" value="{{ $student->age }}" required>

            <label for="birthdate">Birthdate</label>
            <input class="form-control" type="date" name="birthdate" id="birthdate" value="{{ $student->birthdate }}" required>

            <label for="birthplace">Birthplace</label>
            <input class="form-control" type="text" name="birthplace" id="birthplace" value="{{ $student->birthplace }}" required>

            <label for="civilstatus">Civil Status</label>
            <select class="form-control" name="civilstatus" id="civilstatus" required>
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="widowed">Widowed</option>
            </select>

            <label for="sex">Sex</label>
            <select class="form-control" name="sex" id="sex" required>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>

            <label for="religion">Religion</label>
            <input class="form-control" type="text" name="religion" id="religion" value="{{ $student->religion }}" required>

            <label for="citizenship">Citizenship</label>
            <input class="form-control" type="text" name="citizenship" id="citizenship" value="{{ $student->citizenship }}" required>

            <label for="address">Address</label>
            <input class="form-control" type="text" name="address" id="address" value="{{ $student->address }}" required>

            <label for="zipcode">Zipcode</label>
            <input class="form-control" type="text" name="zipcode" id="zipcode" value="{{ $student->zipcode }}" required>

            <label for="contactno">Contact Number</label>
            <input class="form-control" type="text" name="contactno" id="contactno" value="{{ $student->contactno }}" required>

            <label for="email">Email Address</label>
            <input class="form-control" type="text" name="email" id="email" value="{{ $student->email }}" required>
            <hr>

            <!-- Family Background -->
            <h4 style="margin-bottom:15px;">Family Background</h4>

            <!-- Father -->
            <label>Fathers Name</label>
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" name="fathers_fname" placeholder="First Name" value="{{ $student->fathers_fname }}" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="fathers_mname" placeholder="Middle Name" value="{{ $student->fathers_mname }}" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="fathers_lname" placeholder="Last Name" value="{{ $student->fathers_lname }}" required>
              </div>
            </div>

            <label for="fathers_birthdate">Birthdate</label>
            <input class="form-control" type="date" name="fathers_birthdate" id="fathers_birthdate" value="{{ $student->fathers_birthdate }}" required>

            <label for="foccupation">Occupation</label>
            <input class="form-control" type="text" name="foccupation" id="foccupation" value="{{ $student->foccupation }}" required>

            <label for="fcontactno">Contact Number</label>
            <input class="form-control" type="text" name="fcontactno" id="fcontactno" value="{{ $student->fcontactno }}" required>

            <hr>
            <!-- Mother -->
            <label>Mothers Name</label>
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" name="mothers_fname" placeholder="First Name" value="{{ $student->mothers_fname }}" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="mothers_mname" placeholder="Middle Name" value="{{ $student->mothers_mname }}" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="mothers_lname" placeholder="Last Name" value="{{ $student->mothers_lname }}" required>
              </div>
            </div>

            <label for="mothers_birthdate">Birthdate</label>
            <input class="form-control" type="date" name="mothers_birthdate" id="mothers_birthdate" value="{{ $student->mothers_birthdate }}" required>

            <label for="moccupation">Occupation</label>
            <input class="form-control" type="text" name="moccupation" id="moccupation" value="{{ $student->moccupation }}" required>

            <label for="mcontactno">Contact Number</label>
            <input class="form-control" type="text" name="mcontactno" id="mcontactno" value="{{ $student->mcontactno }}" required>

            <!-- Educational Background -->
            <h4 style="margin-bottom:15px;">Educational Background</h4>
            <div class="row">
              <div class="col-md-6">
                <label for="kinder">Kindergarten</label>
                <input class="form-control" type="text" name="kinder" value="{{$student->kinder}}" required>
              </div>

              <div class="col-md-6">
                <label for="kinder_yearGraduated">Year Graduated</label>
                <input class="form-control" type="text" name="kinder_yearGraduated" value="{{$student->kinder_yearGraduated}}" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="fname">Elementary</label>
                <input class="form-control" type="text" name="elementary" value="{{$student->elementary}}" required>
              </div>

              <div class="col-md-6">
                <label for="fname">Year Graduated</label>
                <input class="form-control" type="text" name="elementary_yearGraduated" value="{{$student->elementary_yearGraduated}}" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="fname">Highschool</label>
                <input class="form-control" type="text" name="highschool" value="{{$student->highschool}}" required>
              </div>

              <div class="col-md-6">
                <label for="fname">Year Graduated</label>
                <input class="form-control" type="text" name="highschool_yearGraduated" value="{{$student->highschool_yearGraduated}}" required>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-6">
                <a href="{{ url('student/' . $student->id) }}" class="btn btn-default btn-block">Cancel</a>
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
