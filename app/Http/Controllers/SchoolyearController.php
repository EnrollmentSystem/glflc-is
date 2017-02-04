<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schoolyear;

class SchoolyearController extends Controller
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
    return view('schoolyear.index')->withSchoolyears(Schoolyear::all());
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('schoolyear.create');
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

    $schoolyear = new Schoolyear;

    $schoolyear->name = $request->name;

    $schoolyear->save();

    return redirect()->route('schoolyear.show', $schoolyear->id);

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $schoolyear = Schoolyear::findOrFail($id);
    return view('schoolyear.show')->withSchoolyear($schoolyear);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {

    $schoolyear = Schoolyear::findOrFail($id);
    return view('schoolyear.edit')->withSchoolyear($schoolyear);

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

    $schoolyear = Schoolyear::findOrFail($id);

    $schoolyear->name = $request->name;

    $schoolyear->save();

    return redirect()->route('schoolyear.show', $schoolyear->id);

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $schoolyear = Schoolyear::findOrFail($id);
    $schoolyear->delete();
    return redirect('/schoolyear');
  }
}
