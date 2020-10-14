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
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->gender = $request->gender;
        
        $student->save();
        return redirect()->route('students.index');
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
        return view('students.edit',['student' => $student]);
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
        // dd($request->all());
        // Gan gia tri moi cho cac thuoc tinh cua student can update
        $student->name = $request->name;

        //thực hiện phương thức save để lưu dữ liệu
        $student->save();

         // Cach 2: $student->update(['name' => $request->name]);
        // Hoac $student->update([$request->all()])
        // Khong can save
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)

    {

        if ($student) {

            $student->delete(); //trả về kqua true hoặc false
            //cách 2: Student::destroy($student->id); //trả về số lượng bản ghi
            //Redirect về danh sách(có thực hiện truy vấn lấy ds mới)
            return redirect()->route('students.index');
        }
    }
}
