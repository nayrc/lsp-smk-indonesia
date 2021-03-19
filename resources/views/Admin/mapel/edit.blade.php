@extends('admin.layouts.master')
@section('title', 'SMK INDONESIA')
@section('content')
    <div class="content my-2">
        <h1>Data Mata Pelajaran</h1>
            <div class="form-add ml-2">
                <form action="{{route('admin.mapel.update', $data->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control" name="nama" @if (old('nama')) value="{{old('nama')}}" @else value="{{$data->nama}}" @endif name=>
                    </div>
                    <button class="main-button blue my-2">Submit</button>
                </form>
            </div>
    </div>
@endsection