@extends('student-layout.master')
@section('title', 'Thêm sinh viên')
@section('content')

<?php
$gender = [1 => "nam", 2 => "nữ", 3 => "không hiển thị"]
?>
<form action="{{route('students.store')}}" method="POST" class="form-group">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" id="" class="form-control">
    <label for="">Phone</label>
    <input type="text" name="phone" id="" class="form-control">
    <label for="">Age</label>
    <input type="text" name="age" id="" class="form-control">
    <label for="">Address</label>
    <input type="text" name="address" id="" class="form-control">
    <label for="">Gender</label>
    <input type="text" name="gender" id="" class="form-control">
    <br>
    @foreach($gender as $key => $item)
    <input type="radio" name="gender" id="" value="{{$key}}">{{$item}} &nbsp;
    @endforeach
    <input type="submit" name="" id="" class="btn btn-primary" value="them">
</form>

@endsection