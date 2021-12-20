@extends('layouts.default')

@section('content')
    <section>
        <h1>Add New Student</h1>
        <div class="container m-5">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Student Name</label><br>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label><br>
                            <input type="text" class="form-control" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="address">address</label><br>
                            <textarea type="text" class="form-control" name="address"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
