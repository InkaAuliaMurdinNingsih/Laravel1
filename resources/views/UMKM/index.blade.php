@extends('layouts.main')
@section('content')
{{-- <div class="container">tdpisbb v --}}
  <nav class="navbar bg-body-light">
    <div class="container-fluid">
      <form action="tampil/search"  method= "GET" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" autofocus value="{{ old('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <br>

  <div class="row">

    @foreach ($data as $item)
        <div class="col-4 mb-3">
          <div class="card text-bg-light">
              <img src="{{ asset('storage/aulias/'.$item->image) }}" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title">{{ $item->title }}</h5>
                {{-- <p class="card-text " style="font-size: 15px">{!! $item->content !!}</p> --}}
                <p class="card-text"><small>17/10/2023, 14:00 WIB</small></p>
                <a href="/baca/{{ $item->id }}" class="btn btn-primary">Baca</a>
              </div>
          </div>
        </div>
    @endforeach
  </div>
    <br>
    <br>
    <div class="card-group">
        <div class="card">
          <div class="card-body">
            <img src="{{ asset('img/umkm3.jpeg') }}" class="card-img" alt="...">
            <h5 class="card-title">Terkini</h5>
            <p class="card-text">2 UMKM Terpilih sebagai Pemenang IMA Award 2023</p>
            <p class="card-text"><small class="text-body-secondary">16/10/2023/08.30</small></p>
            <a href="/IMA" class="btn btn-primary">Baca</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="{{ asset('img/umkm4.jpg') }}" class="card-img" alt="...">
            <h5 class="card-title">Terkini</h5>
            <p class="card-text">Bermodal Rp 2,2 Juta, Ilh Handmade Banyak Dilirik Pembeli dari Luar Negri</p>
            <p class="card-text"><small class="text-body-secondary">17/10/2023/13.10</small></p>
            <a href="/handmade" class="btn btn-primary">Baca</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="{{ asset('img/umkm5.jpg') }}" class="card-img" alt="...">
            <h5 class="card-title">Terkini</h5>
            <p class="card-text">Cerita Albertina Asal NTT Membangun Bisnis Coklat D'Hokiest</p>
            <p class="card-text"><small class="text-body-secondary">17/10/2023/09.05</small></p>
            <a href="/coklat" class="btn btn-primary">Baca</a>
          </div>
        </div>
      </div>
</div>
<br>
@endsection