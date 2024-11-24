<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{
    public function index()
    {
        $students = Students::all();
        $data = compact("students");
        return view("welcome")->with($data);
    }
    public function store(Request $request)
    {
        // print_r($request->all());
        $request->validate([
            'fname' => 'required',
            'email' => 'required | email | unique:students',
            'birth' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $studes = new students;
        $studes->name = $request['fname'];
        $studes->email = $request['email'];
        $studes->Dob = $request['birth'];
        $studes->phone = $request['phone'];
        $studes->address = $request['address'];
        $studes->save();
        return redirect(route('homes'));
    }
    public function delete($id)
    {
        students::find($id)->delete();
        return redirect(route('homes'));
    }

    public function edited($id)
    {
        $students = Students::find($id);
        $data = compact('students');
        return view('layouts.update')->with($data);
    }

    public function updateData(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'email' => 'required | email | unique:students',
            'birth' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $id = $request['id'];
        $students = students::find($id);
        $students->name = $request['fname'];
        $students->email = $request['email'];
        $students->Dob = $request['birth'];
        $students->phone = $request['phone'];
        $students->address = $request['address'];
        $students->save();
        return redirect(route('homes'));
    }
}
