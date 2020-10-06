<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index() su dung phuong thuc GET, route name la students.index
    public function index()
    {
        $students = Student::all(); //lay ra het
        // hoac $students = Student::orderBy('id', 'desc')->get();

        return view('students.list', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // create() su dung phuong thuc GET, route name la students.create
    public function create()
    {
        dd('Student Controller create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    // show su dung phuong thuc GET, route name la students.show
    public function show(Student $student)
    {
        // // Neu chi truyen vao $student -> nhan duoc id cua Student
        // $studentObjEloquentModel = Student::find($student);
        // $studentObjQueryBuilder = DB::table('students')->find($student);
        // dd($studentObjEloquentModel->name, $studentObjQueryBuilder->name);

        // // Neu truyen Student $student -> thuc hien truy van tim Student co id = $student
        // $studentObj = $student;

        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
