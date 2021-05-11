<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>{{ env('APP_NAME') }}</title>

    <style>
      .bg-gray {
        background-color: #efefef;
      } 
      .bg-lightblue {
        background-color: #9fd0ff;
      }
      .nav-item {
        border-radius: 5px;
        margin-top: 2px;
        margin-right: 2px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-lightblue py-2 px-3">
      <div class="container-fluid">
        <a class="navbar-brand p-1 bg-gray border " style="border-radius: 10px; box-shadow: 0px 0px 20px 2px #1f82a5b5;" href="{{ route('frontend.main') }}" >
          <img src="{{ asset('assets/images/SUKAKODEBIG.png') }}" alt="Logo SukaKode" class="img-fluid" width="150px" height="60px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('frontend.main') }}">Halaman Utama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar Artikel</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <div class="h-100 p-5 text-white bg-dark" style="background-image: url('{{ asset('assets/images/banner.png') }}');">
        <div class="row">
          <div class="col-md-6">
            <h2 style="text-shadow: 9px 9px 10px #5b00ff;">SukaKode - Blog & Artikel</h2>
            {{-- <h4><marquee behavior="" direction="">Selamat Datang di <a href="#" style="text-decoration: none; color: #fafafa;">SukaKode</a></marquee></h4> --}}
            <h4 style="text-shadow: 9px 9px 10px #52ff00;">Selamat Datang di <a href="#" style="text-decoration: none; color: #fafafa;">SukaKode</a></h4>
            <h6 style="text-shadow: 9px 9px 10px #ffcc00;" class="mb-3">Hayu Belajar Bersama</h6>
            <button class="btn btn-outline-light" type="button">Hayukk !</button>
          </div>
        </div>
      </div>
      {{-- <img src="{{ asset('assets/images/banner.png') }}" alt="Banner SK-Blog" class="img-fluid"> --}}
    </div>

    <div class="container-fluid pt-2">
      <div class="row">
        <div class="col-12">
          <h5>Hello Isekai !</h5>
        </div>
      </div>
    </div>

    <script src="{{ asset('assets/frontend/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>