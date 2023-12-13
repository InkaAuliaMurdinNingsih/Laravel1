@extends('layouts.main')
@section('content')
    <div class="container">
        <h2>{{ $data->title }}</h2>
        <img src="{{ asset('storage/aulias/'.$data->image) }}" class="card-img" alt="...">
        <h4>{{ $data->content }}</h4>
        <br>
        <a href="/umkm" class="btn btn-dark">Kembali</a>
    </div>
@endsection