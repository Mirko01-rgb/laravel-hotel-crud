<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller
{
  public function home(){
    $employee = Employee::all();
    // dd($employee);

    return view('pages.home', compact('employee'));
  }

  public function employee($id) {
    $employee = Employee::findOrFail($id);
     // dd($id);
    // dd($employee);
    return view('pages.employee', compact('employee'));
  }

  public function create(){

    return view('pages.create');
  }

  public function store(Request $request) {
    //dd($request -> all());

    $validate = $request -> validate([
      'firstname' => 'nullable|max:128',
      'lastname' => 'nullable|max:128',
      'role' => 'nullable|max:16',
      'ral' => 'nullable|max:16',
    ]);

    $employee = Employee::create($validate);
    //dd($employee);

    return redirect() -> route('home');
  }
}
