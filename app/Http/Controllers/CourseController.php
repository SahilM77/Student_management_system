<?php

namespace App\Http\Controllers;
use App\Models\courses;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index1()
    {
        $courss = courses::all();
        $data = compact("courss");
        return view("layouts.wlccourse")->with($data);
    }
    public function storec(Request $request)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "duration" => "required"
        ]);
        $cour = new courses;
        $cour->name = $request['name'];
        $cour->description = $request['description'];
        $cour->duration = $request['duration'];
        $cour->save();
        return redirect(route('course1'));
    }
    public function delete1($id)
    {
        courses::find($id)->delete();
        return redirect(route('course1'));
    }

    public function edited1($id)
    {
        $core = courses::find($id);
        $data = compact('core');
        return view('layouts.updatec')->with($data);
    }

    public function updateData1(Request $request)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "duration" => "required"
        ]);
        $id = $request['id'];
        $core = courses::find($id);

        $core->name = $request['name'];
        $core->description = $request['description'];
        $core->duration = $request['duration'];
        $core->save();
        return redirect(route('course1'));
    }
}
