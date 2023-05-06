<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Etudiant;

class studentController extends Controller
{
    // Create Form
    public function createUserForm(Request $request) {
        return view('connect');
    }

    // Store Form data in database
    public function UserForm(Request $request) {
        return view ('principale');
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'StuName' => 'required',
            'StuClass' => 'required',
            'StuGenderMale' => 'required',
        ]);

        $student = Student::create($validatedData);

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'StuName' => 'required',
            'StuClass' => 'required',
            'StuGenderMale' => 'required',
        ]);

        Student::whereId($id)->update($validatedData);

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully');
    }
}