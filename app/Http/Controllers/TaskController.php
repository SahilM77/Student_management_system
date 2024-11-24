<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;

class TaskController extends Controller
{
    public function index3()
    {
        $taks = tasks::all();
        $data = compact("taks");
        return view("layouts.wltask")->with($data);
    }
    public function store2(Request $request)
    {
        // print_r($request->all());
        $request->validate([
            'studid' => 'required',
            'teacherid' => 'required',
            'title' => 'required',
            'description' => 'required',
            'dued' => 'required',
            'status' => 'required'
        ]);
        $taks = new tasks;
        $taks->stud_id = $request['studid'];
        $taks->teacher_id = $request['teacherid'];
        $taks->title = $request['title'];
        $taks->description = $request['description'];
        $taks->due_date = $request['dued'];
        $taks->status = $request['status'];
        $taks->save();
        return redirect(route('taks1'));
    }
}
