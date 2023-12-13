<nav class="navbar navbar-expand-lg bg-ligh">
    <div class="container-fluid">
      <img src="{{ asset('img/logo 1.jpg') }}" style=" width: 100px;" class="logo">
      {{-- <a class="navbar-brand"><span class="text-primary">INK</span>TECNO</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-3 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/umkm">UMKM terkini</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tekno
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/internet">Seputar Internet</a></li>
              <li><a class="dropdown-item" href="/game"> Seputar Game</a></li>
              {{-- <li><a class="dropdown-item" href="#">Seputar Busines</a></li> --}}
              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">deopdown</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="/guru">Guru</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="/siswa">Siswa</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Guru</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>