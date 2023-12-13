{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body style="background: lightgray"> --}}
@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        {{-- <div class="row">
            <div class="col-md-12 bg-light"> --}}
                {{-- <div>
                    <h3 class="text-center my-4">HALAMAN USER</h3>
                    <hr>
                </div> --}}
                <nav class="navbar bg-body-light">
                    <div class="container-fluid">
                      <form action="tampil/search"  method= "GET" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" autofocus value="{{ old('search') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                  <br>
                {{-- <form action="tampil/search" method="GET">
                    <div class="row mb-3">
                        <label for="search" class="col-sm-2 col-form-label">Cari data</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" value="" placeholder="Place Input key for search data..." name="search" autofocus value="{{ old('search') }}">
                        </div>
                    </div>
                </form> --}}
                @forelse ($aulias as $aulia)
                <div class="col-4 mb-3">
                    <div class="card text-bg-light">
                        <img src="{{ asset('storage/aulias/'.$aulia->image) }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h5 class="card-title">{{ $aulia->title }}</h5>
                        {{-- <p class="card-text " style="font-size: 15px">{!! $item->content !!}</p> --}}
                        <p class="card-text"><small>17/10/2023, 14:00 WIB</small></p>
                        <a href="/baca/{{ $aulia->id }}" class="btn btn-primary">Baca</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    Data belum Tersedia.
                </div>
                @endforelse
                    
                {{-- <div class="card border-0 shadow-sm rounded mt-4">
                    <div class="card-body">
                        <a href="{{ route('aulias.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                </tr>
                            </thead>
                        <tbody>
                            @forelse ($aulias as $aulia)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('storage/aulias/'.$aulia->image) }}" class=" rounded" style="width:150px">
                                </td>
                                <td>{{ $aulia->title }}</td>
                                <td>{!! $aulia->content !!}</td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                        </table>
                        {{ $aulias->links() }}
                    </div>
                </div> --}}
            {{-- </div>
        </div> --}}
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
{{-- </body>
</html> --}}
@endsection