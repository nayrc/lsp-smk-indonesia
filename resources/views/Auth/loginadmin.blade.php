@extends('layouts.master')
@section('title', 'Smk Indonesia')
@section('content')
<div class="content my-2">
    <h1 class="text-center">ADMIN</h1>
    @if(session('message'))
    <p>{{session('message')}}</p>
    @endif
    <form action="{{route('loginadmin')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control my-1">
    </div>
    <div class="form-group mt-1">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control my-1">
    </div>
    <button class="main-button blue w-100 my-2">Login</button>
    </form>
</div>
@endsection

