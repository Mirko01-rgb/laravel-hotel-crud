<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller
{
  public function home(){
    $employees = Employee::all();
    // dd($employees);

    return view('pages.home', compact('employees'));
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

  public function destroy($id) {
    //dd($id);
    $employee = Employee::findOrFail($id);
    $employee -> delete();
    return redirect() -> route('home');
  }
}
