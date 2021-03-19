@extends('admin.layouts.master')
@section('title', 'SMK INDONESIA')
@section('content')
    <div class="content my-2">
        <h1>Data Kelas</h1>
            <div class="form-add ml-2">
                <form action="{{route('admin.kelas.update', $data->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" class="form-control" @if (old('nama')) value="{{old('nama')}}" @else value="{{$data->nama}}"@endif name="nama">
                    </div>
                    <div class="form-group mt-1">
                        <label for="">Jurusan</label>
                        {{-- <input type="text" class="form-control" name="id_jurusan"> --}}
                        <select name="id_jurusan" id="" class="form-control">
                            @foreach($jurusan as $j)
                                <option value="{{$j->id}}" {{$j->id == $data->id_jurusan ? 'selected' : ''}}>{{$j->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="main-button blue my-2">Submit</button>
                </form>
            </div>
    </div>
@endsection