<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Schoolyear;
use App\Gender;

class StudentController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('student.index')->withStudents(Student::all());
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $schoolyears = Schoolyear::all();
    $genders = Gender::all();
    return view('student.create')->withGender($genders)->withSchoolyears($schoolyears);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    // validate data
    // $this->validate($request, array(
    //   'schoolyear_id' => 'required',
    //   'fname' => 'required',
    //   'mname' => 'required',
    //   'lname' => 'required',
    //   'age' => 'required',
    //   'birthdate' => 'required',
    //   'birthplace' => 'required',
    //   'civilstatus' => 'required',
    //   'sex' => 'required',
    //   'religion' => 'required',
    //   'citizenship' => 'required',
    //   'address' => 'required',
    //   'zipcode' => 'required',
    //   'contactno' => 'required',
    //   'email' => 'required',
    //   'fathers_fname' => 'required',
    //   'fathers_mname' => 'required',
    //   'fathers_lname' => 'required',
    //   'fathers_birthdate' => 'required',
    //   'foccupation' => 'required',
    //   'fcontactno' => 'required',
    //   'mothers_fname' => 'required',
    //   'mothers_mname' => 'required',
    //   'mothers_lname' => 'required',
    //   'mothers_birthdate' => 'required',
    //   'moccupation' => 'required',
    //   'mcontactno' => 'required',
    //   'elementary' => 'required',
    //   'elementary_yearGraduated' => 'required',
    //   'highschool' => 'required',
    //   'highscool_yearGraduated' => 'required'
    // ));

    // store in the database
    $student = new Student;

    $student->schoolyear_id = $request->schoolyear_id;
    $student->fname = $request->fname;
    $student->mname = $request->mname;
    $student->lname = $request->lname;
    $student->age = $request->age;
    $student->birthdate = $request->birthdate;
    $student->birthplace = $request->birthplace;
    $student->civilstatus = $request->civilstatus;
    $student->gender_id = $request->gender_id;
    $student->religion = $request->religion;
    $student->citizenship = $request->citizenship;
    $student->address = $request->address;
    $student->zipcode = $request->zipcode;
    $student->contactno = $request->contactno;
    $student->email = $request->email;
    $student->fathers_fname = $request->fathers_fname;
    $student->fathers_mname = $request->fathers_mname;
    $student->fathers_lname = $request->fathers_lname;
    $student->fathers_birthdate = $request->fathers_birthdate;
    $student->foccupation = $request->foccupation;
    $student->fcontactno = $request->fcontactno;
    $student->mothers_fname = $request->mothers_fname;
    $student->mothers_mname = $request->mothers_mname;
    $student->mothers_lname = $request->mothers_lname;
    $student->mothers_birthdate = $request->mothers_birthdate;
    $student->moccupation = $request->moccupation;
    $student->mcontactno = $request->mcontactno;
    $student->kinder = $request->kinder;
    $student->kinder_yearGraduated = $request->kinder_yearGraduated;
    $student->elementary = $request->elementary;
    $student->elementary_yearGraduated = $request->elementary_yearGraduated;
    $student->highschool = $request->highschool;
    $student->highschool_yearGraduated = $request->highschool_yearGraduated;

    $student->save();

    // redirect to another page
    return redirect()->route('student.show', $student->id);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $student = Student::findOrFail($id);
    return view('student.show')->withStudent($student);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $student = Student::findOrFail($id);
    $schoolyears = Schoolyear::all();
    $genders = Gender::all();
    return view('student.edit')->withStudent($student)->withSchoolyears($schoolyears)->withGender($genders);
    //return view('student.edit')->withStudent(Student::findOrFail($id));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $student = Student::findOrFail($id);

    $student->schoolyear_id = $request->schoolyear_id;
    $student->fname = $request->fname;
    $student->mname = $request->mname;
    $student->lname = $request->lname;
    $student->age = $request->age;
    $student->birthdate = $request->birthdate;
    $student->birthplace = $request->birthplace;
    $student->civilstatus = $request->civilstatus;
    $student->gender_id = $request->gender_id;
    $student->religion = $request->religion;
    $student->citizenship = $request->citizenship;
    $student->address = $request->address;
    $student->zipcode = $request->zipcode;
    $student->contactno = $request->contactno;
    $student->email = $request->email;
    $student->fathers_fname = $request->fathers_fname;
    $student->fathers_mname = $request->fathers_mname;
    $student->fathers_lname = $request->fathers_lname;
    $student->fathers_birthdate = $request->fathers_birthdate;
    $student->foccupation = $request->foccupation;
    $student->fcontactno = $request->fcontactno;
    $student->mothers_fname = $request->mothers_fname;
    $student->mothers_mname = $request->mothers_mname;
    $student->mothers_lname = $request->mothers_lname;
    $student->mothers_birthdate = $request->mothers_birthdate;
    $student->moccupation = $request->moccupation;
    $student->mcontactno = $request->mcontactno;
    $student->elementary = $request->elementary;
    $student->elementary_yearGraduated = $request->elementary_yearGraduated;
    $student->highschool = $request->highschool;
    $student->highschool_yearGraduated = $request->highschool_yearGraduated;

    $student->save();

    return redirect()->route('student.show', $student->id);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $student = Student::findOrFail($id);
    $student->delete();
    return redirect('/student');
  }
}
