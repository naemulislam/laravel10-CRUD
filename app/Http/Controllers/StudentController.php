<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::latest()->get();
        // dd($students);
        return view('user.index', compact('students'));
    }
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
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
        return back()->with('success', 'Data is created successfully!');
    }
}
