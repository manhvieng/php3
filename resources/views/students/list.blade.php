@extends('student-layout.master')

@section('content')
<table class="container table table-hover">
    <thead class="bg-primary text-white">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Status</th>
            <th>
                <a class="text-white" href="">Add</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->age}}</td>
            <td>
                @if($item->gender==0)
                Nam
                @elseif($item->gender==1)
                Nữ
                @else
                Không hiển thị
                @endif
            </td>
            <td>{{$item->address}}</td>
            <td>{{$item->is_active==1 ? "Yes" : "No"}}</td>
            <td>
                <a class="text-white btn btn-danger" href="">Edit</a>
                <a class="text-white btn btn-warning" href="">Remove</a>
                <a class="text-white btn btn-primary" href="{{route('students.show', $students->id)}}">Detail</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection