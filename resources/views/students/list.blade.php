<!--Kế thừa view master: student-layout/master.blade.php -->
@extends('student-layout.master')

<!--thay doi noi dung don gian-->
@section('title', 'Title list extends')

<!--thay doi noi dung don gian-->
@section('content')

    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Active</th>
                    <th>
                        <button class="btn btn-outline-info">Create</button>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $student)
                <tr>
                    <th>{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->age}}</td>
                    <td>
                        @if($student->gender == 0)
                            Nam
                        @elseif($student->gender == 1)
                            Nữ
                        @else
                            Buê Đuê
                        @endif
                    </td>
                    <td>
                        {{ $student->is_active == 0
                            ? 'Không kích hoạt'
                            : 'Kích hoạt'
                        }}
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-warning">Edit</a>
                        <a href="" class="btn btn-outline-danger">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection

@section('footer', 'footer list extends')