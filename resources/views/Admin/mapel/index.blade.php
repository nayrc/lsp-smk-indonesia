@extends('admin.layouts.master')
@section('title', 'SMK INDONESIA')
@section('content')
    <div class="content my-2">
        <h1>Data Jurusan</h1>
        <div class="d-flex">
            <div class="data">
                @if(session('message'))
                    <p class="background-success">{{session('message')}}</p>
                @endif
                <table border="1">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Opsi</td>
                    </tr>
                    @foreach($data as $key => $d)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$d->nama}}</td>
                            <td>
                                <a href="{{route('admin.mapel.edit', $d->id )}}">Edit</a>
                                <form action="{{route('admin.mapel.delete', $d->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="form-add ml-2">
                <form action="{{route('admin.mapel.add')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <button class="main-button blue my-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection