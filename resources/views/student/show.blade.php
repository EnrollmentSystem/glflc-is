@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading clearfix">

					Student
					<form class="pull-right" action="{{ url('student/' . $student->id) }}" method="post" style="margin-left:5px;display:inline-flex">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-xs">Delete</button>
					</form>
					<a href="{{ url('student/' . $student->id . '/edit') }}" class="btn btn-info pull-right btn-xs">Edit</a>
					<a href="{{ url('student') }}" class="btn btn-default pull-right btn-xs" style="margin-right:5px;">Back</a>

				</div>
				<div class="panel-body">
					<div class="row">
						<!-- Personal Information -->
						<div class="col-xs-12"><h3>Personal Information</h3></div>

						<div class="col-xs-3">School Year</div>
						<div class="col-xs-9">{{$student->schoolyear->name}}</div>

						<div class="col-xs-3">Name</div>
						<div class="col-xs-9">{{ $student->fname . ' ' . $student->mname . ' ' . $student->lname }}</div>

						<div class="col-xs-3">Age</div>
						<div class="col-xs-9">{{ $student->age }}</div>

						<div class="col-xs-3">Birthdate</div>
						<div class="col-xs-9">{{ $student->birthdate }}</div>

						<div class="col-xs-3">Birthplace</div>
						<div class="col-xs-9">{{ $student->birthplace }}</div>

						<div class="col-xs-3">Civil Status</div>
						<div class="col-xs-9">{{ $student->civilstatus }}</div>

						<div class="col-xs-3">Sex</div>
						<div class="col-xs-9">{{ $student->genders->id }}</div>

						<div class="col-xs-3">Religion</div>
						<div class="col-xs-9">{{ $student->religion }}</div>

						<div class="col-xs-3">Citizenship</div>
						<div class="col-xs-9">{{ $student->citizenship }}</div>

						<div class="col-xs-3">Address</div>
						<div class="col-xs-9">{{ $student->address }}</div>

						<div class="col-xs-3">Zipcode</div>
						<div class="col-xs-9">{{ $student->zipcode }}</div>

						<div class="col-xs-3">Contact Number</div>
						<div class="col-xs-9">{{ $student->contactno }}</div>

						<div class="col-xs-3">Email Address</div>
						<div class="col-xs-9">{{ $student->email }}</div>

						<!-- Family Background -->
						<div class="col-xs-12"><h3>Family Background</h3></div>
						<div class="col-xs-3">Fathers Name</div>
						<div class="col-xs-9">{{ $student->fathers_fname . ' ' . $student->fathers_mname . ' ' . $student->fathers_lname }}</div>

						<div class="col-xs-3">Birthdate</div>
						<div class="col-xs-9">{{ $student->fathers_birthdate }}</div>

						<div class="col-xs-3">Occupation</div>
						<div class="col-xs-9">{{ $student->foccupation }}</div>

						<div class="col-xs-3">Contact Number</div>
						<div class="col-xs-9">{{ $student->fcontactno }}</div>

						<div class="col-xs-3">Mothers Name</div>
						<div class="col-xs-9">{{ $student->mothers_fname . ' ' . $student->mothers_mname . ' ' . $student->mothers_lname }}</div>

						<div class="col-xs-3">Birthdate</div>
						<div class="col-xs-9">{{ $student->mothers_birthdate }}</div>

						<div class="col-xs-3">Occupation</div>
						<div class="col-xs-9">{{ $student->moccupation }}</div>

						<div class="col-xs-3">Contact Number</div>
						<div class="col-xs-9">{{ $student->mcontactno }}</div>

						<div class="col-xs-3">Birthdate</div>
						<div class="col-xs-9">{{ $student->mothers_birthdate }}</div>


						<!-- Educational Background -->
						<div class="col-xs-12"><h3>Educational Background</h3></div>
						<div class="col-xs-3">Elementary</div>
						<div class="col-xs-9">{{ $student->elementary }}</div>

						<div class="col-xs-3">Year Graduated</div>
						<div class="col-xs-9">{{ $student->elementary_yearGraduated }}</div>

						<div class="col-xs-3">Highschool</div>
						<div class="col-xs-9">{{ $student->highschool }}</div>

						<div class="col-xs-3">Year Graduated</div>
						<div class="col-xs-9">{{ $student->highschool_yearGraduated }}</div>

					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>

	@endsection
