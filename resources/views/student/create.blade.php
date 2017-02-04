@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">Create Student</div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/student') }}">
            {{csrf_field()}}

            <!-- Personal Information -->
            <h4>Personal Information</h4>

            <label for="schoolyear_id" class="form-spacing-top">School Year</label>
            <select class="form-control" name="schoolyear_id" required>
              @foreach($schoolyears as $schoolyear)
              <option value="{{$schoolyear->id}}">{{$schoolyear->name}}</option>
              @endforeach
            </select>

            <label for="fname">First name</label>
            <input class="form-control" type="text" name="fname" required>

            <label for="fname">Middle name</label>
            <input class="form-control" type="text" name="mname" required>

            <label for="fname">Last name</label>
            <input class="form-control" type="text" name="lname" required>

            <label for="fname">Age</label>
            <input class="form-control" type="number" name="age" required>

            <label for="fname">Birthdate</label>
            <input class="form-control" type="date" name="birthdate" required>

            <label for="fname">Birthplace</label>
            <input class="form-control" type="text" name="birthplace" required>

            <label for="fname">Civil Status</label>
            <select class="form-control" name="civilstatus" required>
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="widowed">Widowed</option>
            </select>

            <label for="gender">Sex</label>
            <select class="form-control" name="gender" required>
              @foreach($genders as $gender)
              <option value="{{$gender->id}}">{{ $gender->name }}</option>
              @endforeach
            </select>

            <label for="fname">Religion</label>
            <input class="form-control" type="text" name="religion" required>


            <label for="fname">Citizenship</label>
            <input class="form-control" type="text" name="citizenship" required>

            <label for="fname">Address</label>
            <input class="form-control" type="text" name="address" required>

            <label for="fname">Zipcode</label>
            <input class="form-control" type="text" name="zipcode" required>

            <label for="fname">Contact Number</label>
            <input class="form-control" type="text" name="contactno" required>

            <label for="fname">Email Address</label>
            <input class="form-control" type="text" name="email" required>
            <hr>

            <!-- Family Background -->
            <h4 style="margin-bottom:15px;">Family Background</h4>
            <label for="fname">Fathers Name</label>
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" name="fathers_fname" placeholder="First Name" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="fathers_mname" placeholder="Middle Name" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="fathers_lname" placeholder="Last Name" required>
              </div>
            </div>

            <label for="fname">Birthdate</label>
            <input class="form-control" type="date" name="fathers_birthdate" required>

            <label for="fname">Occupation</label>
            <input class="form-control" type="text" name="foccupation" required>

            <label for="fname">Contact Number</label>
            <input class="form-control" type="text" name="fcontactno" required>
            <hr>

            <label for="fname">Mothers Name</label>
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" name="mothers_fname" placeholder="First Name" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="mothers_mname" placeholder="Middle Name" required>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" name="mothers_lname" placeholder="Last Name" required>
              </div>
            </div>

            <label for="fname">Birthdate</label>
            <input class="form-control" type="date" name="mothers_birthdate" required>

            <label for="fname">Occupation</label>
            <input class="form-control" type="text" name="moccupation" required>

            <label for="fname">Contact Number</label>
            <input class="form-control" type="text" name="mcontactno" required>
            <hr>

            <!-- Educational Background -->
            <h4 style="margin-bottom:15px;">Educational Background</h4>

            <div class="row">
              <div class="col-md-6">
                <label for="kinder">Kindergarten</label>
                <input class="form-control" type="text" name="kinder" required>
              </div>

              <div class="col-md-6">
                <label for="kinder_yearGraduated">Year Graduated</label>
                <input class="form-control" type="text" name="kinder_yearGraduated" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="fname">Elementary</label>
                <input class="form-control" type="text" name="elementary" required>
              </div>

              <div class="col-md-6">
                <label for="fname">Year Graduated</label>
                <input class="form-control" type="text" name="elementary_yearGraduated" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="fname">Highschool</label>
                <input class="form-control" type="text" name="highschool" required>
              </div>

              <div class="col-md-6">
                <label for="fname">Year Graduated</label>
                <input class="form-control" type="text" name="highschool_yearGraduated" required>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-6">
                <a href="{{ url('student') }}" class="btn btn-default btn-block">Cancel</a>
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
