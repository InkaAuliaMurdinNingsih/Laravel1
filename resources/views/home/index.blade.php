@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card text-bg-light">
        <img src="{{ asset('img/web1.jpg') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">Headline</h5>
          <p class="card-text " style="font-size: 35px">Duduk Perkara Social E-commerce Dilarang Jualan, Bermula TikTok Shop yang Dikeluhkan UMKM...</p>
          <p class="card-text"><small>25/09/2023, 19:02 WIB</small></p>
          <a href="/tiktok" class="btn btn-primary">Baca</a>
        </div>
      </div>
</div>
  <div class="container text-center mb-4 mt-4">
    <div class="row align-items-center">
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/web2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Presiden Joko Widodo saat menyaksikan langsung acara bertajuk Malam Apresiasi Nusantara di kawasan Ibu Kota Nusantara...(22/9/2023)</p>
              <a href="/nusantara" class="btn btn-primary">Baca</a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/web3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Alasan Pemerintah Larang Transaksi di "Social E-commerce" seperti TikTok Shop. Alasan pelarangan ini lantaran Social E-commerch hanya...(25/9/2023).</p>
              <a href="/ecommers" class="btn btn-primary">Baca</a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/web4.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Pemerintah RI Larang Transaksi di TikTok, Hanya Boleh Promosi Hal itu diungkapkan oleh Menteri Perdagangan Zulkifli Hasan usai menghadiri..(26/9/2023)</p>
              <a href="/transaksi" class="btn btn-primary">Baca</a>
            </div>
          </div>
      </div>
    </div>
    <div class="row mb-5 mt-5">
        <div class="col-sm-6">
        <div class="card mb-3">
            <img src="{{ asset('img/web5.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Berita Terkini</h5>
              <p class="card-text">PDSI Minta Pemerintah Audit Organisasi Profesi yang Himpun Dana Besar Hasil Pengurusan Izin...</p>
              <p class="card-text"><small class="text-body-secondary">26/09/2023, 11:14 WIB</small></p>
              <a href="/pdsi" class="btn btn-primary">Baca</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card" >
            <img src="{{ asset('img/web6.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Berita Terkini</h5>
              <p class="card-text">Hampir Seminggu Menjabat, Pj Wali Kota Bekasi Belum Bisa Tempati Rumah Dinas..</p>
              <p class="card-text"><small class="text-body-secondary">26/09/2023, 11:14 WIB</small></p>
              <a href="/walikota" class="btn btn-primary">Baca</a>
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
            <img src="{{ asset('img/web7.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Dukung Penanggulangan Covid-19, BCA Buka Sentra Vaksinasi</p>
              <p class="card-text"><small class="text-body-secondary">26/09/2023, 11:14 WIB</small></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/web8.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Dorong Sinergi Pemulihan Ekonomi, Jokowi Luncurkan Taksonomi Hijau Indonesia</p>
              <p class="card-text"><small class="text-body-secondary">21/01/2023, 01:54 WIB</small></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/web9.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Lagu Baru Bagus Dwi Danto: Kegigihan Mengupayakan Harapan Baik</p>
              <p class="card-text"><small class="text-body-secondary">26/09/2023, 11:14 WIB</small></p>
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

