<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students =  Student::latest()->get();
        return view('user.index', compact('students'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'nullable',
        ]);
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return to_route('index')->with('success', 'Data is created successfully!');
    }
    public function edit(Student $student)
    {
        //dd($student);
        return view('user.edit', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return back()->with('success', 'Data is updated successfully!');
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return back()->with('success', 'Data is deleted successfully!');
    }
}
