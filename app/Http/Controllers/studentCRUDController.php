<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class studentCRUDController extends Controller
{
    public function index()
    {
        $data['Students'] = student::orderby("id", "asc")->paginate(10);
        return view("Students.index", $data);
    }

    public function create()
    {
        return view("Students.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "age" => "required",
            "grade" => "required",
        ]);
        $student = new student;
        $student->name = $request->name;
        $student->age = $request->age;
        $student->grade = $request->grade;
        $student->save();
        return redirect()->route("Students.index");
    }

    public function edit(student $Student)
    {
        return view("Students.edit", compact("Student"));
    }

    public function update(Request $request, student $Student)
    {
        $request->validate([
            "name" => "required",
            "age" => "required",
            "grade" => "required",
        ]);

        $student = student::find($Student->id);
        $student->name = $request->name;
        $student->age = $request->age;
        $student->grade = $request->grade;
        $student->save();
        return redirect()->route("Students.index");
    }

    public function destroy(student $student, $id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect()->route("Students.index");
    }
}