<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentQualification;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students = Student::all();
        $students = Student::paginate(4);
        // $students = Student::where('id', 1234567)->get();
        return view("student.index", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['hobbies'] = implode(',', $data['hobbies']);
        // dd($data);
        // dd($data["hobbies"]);
        $student = Student::create($data);
        // dd($student);
        return redirect()->route('student.index')->withSuccess('Data Successfully added...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("student.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // ----------------------------------------------
    // public function edit(Student $student)
    public function edit($id)
    {
        // echo $id;
        // $student = Student::select('name', 'email')->where('id', $id)->first();

        $student = Student::find($id);

        return view("student.edit", compact('student'));
    }

    // ----------------------------------------------


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     // public function update(Request $request, $id)
    // {
    //     // dd($id);
    //     // $data = $request->all();
    //     $data = $request->except('_token', '_method');
    //     // dd($data);
    //     $student = Student::where('id', $id)->update($data);
    //     return redirect()->route('student.index')->withSuccess('Data updated...');
    // }

        public function update(Request $request, Student $student)
        {
            $data = $request->except('_token', '_method');
            $data['hobbies'] = implode(',', $data['hobbies']);
            $student->update($data);
            return redirect()->route('student.index')->withSuccess('Data updated...');
        }

    // ------------------------------------------------------------------
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // ----------------------------------------------------------------

    // public function destroy($id)
    // {
    //     // dd($id);
    //     Student::where('id', $id)->delete();
    //     return redirect()->route('student.index')->withSuccess('Data deleted....');
    // }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->withSuccess('Data deleted....');
    }
    // ----------------------------------------------------------------

}
