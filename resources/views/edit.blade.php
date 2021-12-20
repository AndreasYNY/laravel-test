@extends('layouts.default')

@section('content')
<h1>Edit {{$data->name}}</h1>
    <section>
        <div class="container m-5">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/update-' . $data->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Student Name</label><br>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label><br>
                            <input type="text" class="form-control" name="nim" value="{{$data->nim}}">
                        </div>
                        <div class="form-group">
                            <label for="address">address</label><br>
                            <textarea type="text" class="form-control" name="address">{{$data->address}}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-warning">edit</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{url('/')}}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
