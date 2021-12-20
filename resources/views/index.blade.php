@extends('layouts.default')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Crud</h1>
                <a href="{{url('create')}}" class="btn btn-primary">Tambah</a>
            </div>

            <div class="col-md-12 mt-4">
                <table class="table table-dark">
                    <tr>
                        <th>inum</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $dataMahasiswa)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$dataMahasiswa->id}}</td>
                        <td>{{$dataMahasiswa->name}}</td>
                        <td>{{$dataMahasiswa->nim}}</td>
                        <td>{{$dataMahasiswa->address}}</td>
                        <td>
                            <a href="{{url('show-'.$dataMahasiswa->id)}}" class="btn btn-success">show</a>
                            <a href="{{url('edit-'.$dataMahasiswa->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url('delete-'.$dataMahasiswa->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection