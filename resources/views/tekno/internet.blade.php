@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row mb-5 mt-5">
        <div class="col-sm-6">
        <div class="card mb-3">
            <img src="{{ asset('img/satelit1.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Seputar Internet</h5>
              <p class="card-text">Efisiensi, Satelit HBS Bakti Dibatalkan...</p>
              <p class="card-text"><small class="text-body-secondary">24/10/2023, 08:51 WIB</small></p>
              <a href="/satelit" class="btn btn-primary">Baca</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card" >
            <img src="{{ asset('img/ai1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Seputar Internet</h5>
              <p class="card-text">Cara Buat Kata Pengantar untuk Makalah di ChatGPT dan Bard Lengkap dengan Perintah dan Contohnya</p>
              <p class="card-text"><small class="text-body-secondary">22/10/2023, 11:15 WIB</small></p>
              <a href="/gpt" class="btn btn-primary">Baca</a>
            </div>
          </div>
        </div>
    </div>
</div>    

<div class="container mb-5">
  <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/internet1.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p> hands-on Laptop 3-in-1 "HP Spectre Fold Seharga 75 juta di SXSW Sydney</p>
            {{-- <p class="card-text"><small class="text-body-secondary">26/09/2023, 11:14 WIB</small></p> --}}
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/internet2.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p> Foto-foto hasil Jepretan Sony A7CR, Kamera Mirrorless Ringkas 62 MP</p>
            {{-- <p class="card-text"><small class="text-body-secondary">21/01/2023, 01:54 WIB</small></p> --}}
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/internet3.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p>Hasil Foto Realme 11 Pro  5G Siang dan Malam, Punya Kamera 100 MP</p>
            {{-- <p class="card-text"><small class="text-body-secondary">26/09/2023, 11:14 WIB</small></p> --}}
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>

@endsection