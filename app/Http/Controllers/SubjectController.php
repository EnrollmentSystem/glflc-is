<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
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
    return view('subject.index')->withSubjects(Subject::all());
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('subject.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //validate data
    $this->validate($request, array(
      'grade' => 'required',
      'subjectCode' => 'required',
      'subjectDesc' => 'required',
      'schedTime' => 'required',
      'room' => 'required',
      'schedDay' => 'required'
    ));

    $subject = new Subject;

    $subject->grade = $request->grade;
    $subject->subjectCode = $request->subjectCode;
    $subject->subjectDesc = $request->subjectDesc;
    $subject->schedTime = $request->schedTime;
    $subject->schedDay = $request->schedDay;
    $subject->room = $request->room;

    $subject->save();

    return redirect()->route('subject.show', $subject->id);

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $subject = Subject::findOrFail($id);
    return view('subject.show')->withSubject($subject);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {

    $subject = Subject::findOrFail($id);
    return view('subject.edit')->withSubject($subject);

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

    $subject = Subject::findOrFail($id);

    $subject->grade = $request->grade;
    $subject->subjectCode = $request->subjectCode;
    $subject->subjectDesc = $request->subjectDesc;
    $subject->schedTime = $request->schedTime;
    $subject->schedDay = $request->schedDay;
    $subject->room = $request->room;

    $subject->save();

    return redirect()->route('subject.show', $subject->id);

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $subject = Subject::findOrFail($id);
    $subject->delete();
    return redirect('/subject');
  }
}
