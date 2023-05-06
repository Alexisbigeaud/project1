<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newstudent;

class NewstudentController extends Controller
{
    public function index1()
    {
        $students = Newstudent::orderBy('name', 'desc')->paginate(5);
        return view('newindex', compact('students'));
    }
    
    public function create1()
    {
        return view('newcreate');
    }
    
    public function store1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:newstudents',
            'subject' => 'required',
            'gender' => 'required',
        ]);
    
        Newstudent::create($request->all());
    
        return redirect()->route('newindex')
            ->with('success', 'New student created successfully.');
    }
    
    public function show1(Newstudent $student)
    {
        return view('newshow', compact('student'));
    }

    public function edit1(Newstudent $student)
    {
        return view('newedit', compact('student'));
    }

    public function update1(Request $request, Newstudent $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:newstudents,email,'.$student->id,
            'subject' => 'required',
            'gender' => 'required',
        ]);
        
        $student->update($request->all());

        return redirect()->route('newindex')
            ->with('success', 'New student updated successfully');
    }

    public function destroy1(Newstudent $student)
    {
        $student->delete();

        return redirect()->route('newindex')
            ->with('success', 'New student deleted successfully');
    }
}