@extends('layouts.default')

@section('content')
<div class="card" style="width: 18rem;">
    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" class="card-img-top" alt="...">
    <div class="card-body">
    <h1 class="text-dark">{{$data->name}}</h1>
    <span class="card-text text-dark">{{$data->address}}</span><br>
    <span class="card-text text-dark">NIM: {{$data->nim}}</span>
    </div>
  </div>
@endsection