<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function() {
   $students = DB::table('students')->get();
    
    return view('students.list', [
        'students' => $students
    ]);
})->name('student-list');
//chức năng login

Route::get('/login', function(){
    return view('login');
})->name('get-login');

Route::post('/post-login',function(Request $request){
    // xử lí login truy vấn
    // dd($request->all());
    
    $username = $request->username;

    //thực hiện student thì sẽ redirect sang student-list
    $students = DB::table('students')->where('name', 'like', "%$username%")->get();
    //nếu có student thì sẽ redirect sang student-list
    if($students){
        return redirect()->route('student-list');
    }
    //nếu ko thì quay lại màn login
    return redirect()->route('get-login');
})->name('post-login');