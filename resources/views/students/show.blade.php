@extends('student-layout.master')

@section('content')

Tên sinh viên : {{$student->name}}<br>
SĐT: {{$student->phone}}<br>
Tuổi: {{$student->age}}<br>
Giới tính: @if($student->gender==0)
                Nam
                @elseif($student->gender==1)
                Nữ
                @else
                Không hiển thị
                @endif<br>
Address: {{$student->address}}<br>
Status: {{$student->is_active==1 ? "Yes" : "No"}}

@endsection