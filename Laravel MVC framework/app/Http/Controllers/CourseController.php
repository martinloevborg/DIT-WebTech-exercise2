<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {
    public function index() {
        return view("courses.index")->with("courses", Course::all());
    }
    public function create() {
        return view("courses.create")->with("courses", Course::all());
    }
    public function store() {#Department $department
        $department = Department::find(request("department"));
        $course = new Course();
        $course->code = request("code");
        $course->name = request("name");
        $course->ects = request("ects");
        $course->department()->associate($department);
        $course->description = request("description");
        #$course->load('department'); 
        #return $course;
        $course->save();
        return redirect()->route("courses.index")->with("successC","Course $course->code created successfully");
    }
    public function show(Course $course) {
        #return view("/courses/$course->id")->with("courses", Course::all());
        return view("courses.show")->with("courses", $course);
    }
    public function edit(Course $course) {
        #$course = new Course();
        #$course = Course::all();
        #return view("/courses/$course->id/edit")->with("courses", Course::all());
        return view("courses.edit")->with("courses", $course);
    }
    public function destroy(Course $course) { 
        $course->delete();
        return redirect()->route("courses.index")->with("successC","Course $course->code successfully removed");
    }
    public function update(Course $course , Request $request) {
        #$request->validate([
            #'code' => 'required',
            #'name' => 'required',
            #'description' => 'required',
            #'ects' => 'required'
        #]);
        #$department = Department::find(request("department"));
        #dd($course);
        #$course = new Course();
        $course->code = $request->input("code");
        $course->name = $request->input("name");
        $course->ects = $request->input("ects");
        #$course->department()->associate($department);
        #$course->department()->$request->select($department);
        $course->department_id = $request->input("department");
        $course->description = $request->input("description");
        $course->update();
        
        #return redirect()->route("/courses/$course->id")->with("messageC","Course $course->code updated succesfully");
        return redirect()->route("courses.show", [$course->id])->with("messageC","Course $course->code updated successfully");
    }
}