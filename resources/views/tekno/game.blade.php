@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="{{ asset('img/genshin.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Game</h5>
              <p class="card-text">Genshin Impact Bagi-bagi Karakter Freminet Gratis, Begini Cara Mendapatkannya</p>
              <a href="/genshin" class="btn btn-primary">Baca</a>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">20/10/2023</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            
            <img src="{{ asset('img/game1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Game</h5>
              <p class="card-text">Playatation Store Gelar Hallowen Sale,game Horor PS4 dan PS5</p>
              <a href="/ps" class="btn btn-primary">Baca</a>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">20/10/2023</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{ asset('img/spiderman1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Game</h5>
              <p class="card-text">Pecah Rekor, "Marvel's Spider-Man2" Terjual 2,5 Juta Kopi sehari</p>
              <a href="/marvel" class="btn btn-primary">Baca</a>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">24/19/2023</small>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="card mb-3">
        <img src="{{ asset('img/roblox.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Game</h5>
          <p class="card-text">seminngu Rilis di PS, "Roblox" Tempel "Call of Duty" dan "Fortnite"</p>
          <p class="card-text"><small class="text-body-secondary">18/10/2023</small></p>
          <a href="/roblox" class="btn btn-primary">Baca</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Game</h5>
          <p class="card-text">"Minicraft" Jadi Game Terlaris sepanjang masa dengan kopi hingga 300 juta</p>
          <p class="card-text"><small class="text-body-secondary">17/10/2023</small></p>
          <a href="/minicraft" class="btn btn-primary">Baca</a>
        </div>
        <img src="{{ asset('img/minicraft1.png') }}" class="card-img-top" alt="...">
      </div>
    </div>

@endsection