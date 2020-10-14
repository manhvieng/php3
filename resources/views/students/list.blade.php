@extends('student-layout.master')
@section('title', 'Trang Chủ')
@section('content')
<table class="container table table-hover table-bordered table-dark">
    <thead class="bg-primary text-white">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Status</th>
            <th>
                <a class="text-white" href="{{route('students.create')}}">Add</a>
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
                
                <a class="text-white btn btn-danger" href="{{route('students.edit', $item->id)}}">Edit</a>
                <form action="{{route('students.destroy', $item->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-warning" type="submit">Remove</button>
                </form>

                <a class="text-white btn btn-primary" href="{{route('showStudent', $item->id)}}">Detail</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection