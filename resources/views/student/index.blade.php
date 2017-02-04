@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading clearfix">Student
					<span class="badge">{{$students->count()}}</span>
					<span class="badge">{{$students->where('sex', '1')->count()}}</span>
					<a href="{{ url('/student/create') }}" class="btn btn-primary btn-xs pull-right">Create</a>
				</div>
				<div class="panel-body">
					<table class="table table-primary">
						<thead>
							<th>Name</th>
						</thead>
						<tbody>
							@foreach ($students as $student)
							<tr>
								<td><a href="{{ url('student/' . $student->id) }}">{{ $student->fname . ' ' . $student->mname . ' ' . $student->lname }}</a></td>
							</tr>
							@endforeach
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
