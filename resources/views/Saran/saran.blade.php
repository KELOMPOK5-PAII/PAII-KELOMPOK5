@extends('layouts.main')
@section('title', 'Saran')
@section('container')

@include('sweetalert::alert')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Saran</li>
  </ol>
</nav>
</div>

    <div class="container">
       <h2> Saran </h2>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <style>
      label, button{
        font-family: 'Concert One', cursive;
      }
    </style>
        <div class="row">
            <div class="col">
              <div class="container card rounded" class="hero rounded-3 px-5 pb-5 pt-5">
                  <br>
                  <form action="/saran/simpan" method="post">
                    @csrf
                      <div class="form-group mt-3">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autocomplete="off" placeholder="Tuliskan Nama Anda">
                          @error('nama')
                              <div class="invalid-feedback">{{  $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group mt-3">
                          <label>Saran</label>
                          <textarea type="text" name="saran" class="form-control @error('saran') is-invalid @enderror" value="{{ old('saran') }}" autocomplete="off" placeholder="Tuliskan saran anda "></textarea>
                          @error('saran')
                              <div class="invalid-feedback">{{  $message }}</div>
                          @enderror
                      </div>
                      <br>
                      <div class="form-group mt-3">
                      <button type="submit" style="float: right;" class="btn btn-primary" style='font-size:16px'><i class='far fa-paper-plane'></i> Simpan</button>
                      </div>
                  </form>
                  <br>
              </div>
            </div>
        </div>
    </div><br>

    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


@endsection