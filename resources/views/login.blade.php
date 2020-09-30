@extends('student-layout.master')
@section('title')
@section('header', 'login header')
@section('navbar', 'login navbar')

@section('content')
<form action="{{ route('post-login') }}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Đăng nhập</button>
</form>
@endsection

@section('footer', 'footer extends login')