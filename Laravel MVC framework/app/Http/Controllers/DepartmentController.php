<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;

class DepartmentController extends Controller {
    public function index() {
        $departments = Department::all();
        return view("departments.index")->with("departments", $departments);
    }
    public function create() {
        return view("departments.create")->with("departments", Department::all());
    }
    public function store() {
        $department = new Department();
        $department->code = request("code");
        $department->name = request("name");
        $department->description = request("description");

        $department->save();
        return redirect()->route("departments.index")->with("success","Department $department->code created successfully");
    }
    public function show(Department $department) {
        return view("departments.show")->with("departments", $department);#Department::all());
    }
    public function edit(Department $department) {
        #$department = new Department();
        #return view("/departments/$department->id/edit")->with("departments", Department::all());
        return view("departments.edit")->with("departments", $department);
    }
    public function destroy(Department $department) { 
        $department->delete();
        return redirect()->route("departments.index")->with("success","Department $department->code successfully removed");
    }
    public function update(Request $request, Department $department) {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);
        #$department = new Department();
        #$department->code = $request->code;
        #$department->name = $request->name;
        #$department->description = $request->description;
        $department->code = $request->input("code");
        $department->name = $request->input("name");
        $department->description = $request->input("description");
        $department->update();
        #$department->save();
        #return redirect()->route("departments.show")->with("message","Department $department->code updated successfully");
        return redirect()->route("departments.show", [$department->id])->with("message","Department $department->code updated successfully");
    }
}