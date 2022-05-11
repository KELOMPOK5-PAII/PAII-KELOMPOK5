@extends('layouts/main2')

<style>
            button{
                float: right;
            }
        </style>
         <link rel="stylesheet" href="{{asset('css/style.css')}}">

@section('title','Gedung | Tambah')

@section('content')
    <div class="container">
        <br>
        <center><h2 id="teks"><i class="fas fa-user-plus" aria-hidden="true"></i>&nbsp;TAMBAH DATA GEDUNG</h2></center><br><br>
        <h5><a href="/AdminGedung" class="badge badge-pill badge-secondary">Kembali</a><br><br></h5>

        <div class="hero rounded-3 px-5 pb-5 pt-5">
            <form enctype="multipart/form-data" action="/AdminGedung/simpan" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="namagedung" class="form-control @error('namagedung') is-invalid @enderror" value="{{ old('namagedung') }}" autocomplete="off" autofocus>
                    @error('namagedung')
                            <div class="alert-danger mt-1">{{  $message }}</div>
                    @enderror
                </div>


                <div class="form-group mt-3">
                    <label>Deskripsi</label>
                    <textarea cols="30" rows="6" type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" autocomplete="off"></textarea>
                    @error('deskripsi')
                            <div class="alert-danger mt-1">{{  $message }}</div>
                    @enderror
                </div>


                <div class="form-group mt-3">
                    <label>Gambar 1</label><br>
                    <input type="file" name="gambar"  value="{{ old('gambar') }}" autocomplete="off">
                    @error('gambar')
                            <div class="alert-danger mt-1">{{  $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label>Gambar 2</label><br>
                    <input type="file" name="gambar1"  value="{{ old('gambar1') }}" autocomplete="off">
                    @error('gambar1')
                            <div class="alert-danger mt-1">{{  $message }}</div>
                    @enderror
                </div>
                <br><br>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
        <br>

    <br><br>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>
@endsection
