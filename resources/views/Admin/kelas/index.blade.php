@extends('admin.layouts.master')
@section('title', 'SMK INDONESIA')
@section('content')
    <div class="content my-2">
        <h1>Data Kelas</h1>
        <div class="d-flex">
            <div class="data">
                @if(session('message'))
                    <p class="background-success">{{session('message')}}</p>
                @endif
                <table border="1">
                    <tr>
                        <td>No</td>
                        <td>Kelas</td>
                        <td>Jurusan</td>
                        <td>Opsi</td>
                    </tr>
                    @foreach($data as $key => $d)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->jurusan()->first()->nama}}</td>
                            <td>
                                <a href="{{route('admin.kelas.edit', $d->id )}}">Edit</a>
                                <form action="{{route('admin.kelas.delete', $d->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{-- {{$data->links()}} --}}
            </div>
            <div class="form-add ml-2">
                <form action="{{route('admin.kelas.add')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group mt-1">
                        <label for="">Jurusan</label>
                        {{-- <input type="text" class="form-control" name="id_jurusan"> --}}
                        <select name="id_jurusan" id="" class="form-control">
                            @foreach($jurusan as $j)
                                <option value="{{$j->id}}">{{$j->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="main-button blue my-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection