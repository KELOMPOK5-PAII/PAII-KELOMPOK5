@extends('layouts/main2')

<style>
            button{
                float: right;
            }
        </style>
         <link rel="stylesheet" href="{{asset('css/style.css')}}">

@section('title','Kantin | Tambah')

@section('content')
    <div class="container">
        <br>
        <center><h2 id="teks"><i class="fas fa-user-plus" aria-hidden="true"></i>&nbsp;TAMBAH KANTIN</h2></center><br><br>
        <h5><a href="/AdminKantin" class="badge badge-pill badge-secondary">Kembali</a><br><br></h5>

        <div class="hero rounded-3 px-5 pb-5 pt-5">
            <form enctype="multipart/form-data" action="/AdminKantin/simpan" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="namakantin" class="form-control @error('namakantin') is-invalid @enderror" value="{{ old('namakantin') }}" autocomplete="off" autofocus>
                    @error('namakantin')
                            <div class="alert-danger mt-1">{{  $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label>Jam Makan</label>
                    <input type="text" name="jammakan" class="form-control @error('jammakan') is-invalid @enderror" value="{{ old('jammakan') }}" autocomplete="off">
                    @error('jammakan')
                            <div class="alert-danger mt-1">{{  $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label>Perlengkapan</label>
                    <textarea cols="30" rows="6" type="text" name="perlengkapan" class="form-control @error('perlengkapan') is-invalid @enderror" value="{{ old('perlengkapan') }}" autocomplete="off"></textarea>
                    @error('perlengkapan')
                            <div class="alert-danger mt-1">{{  $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label>Peraturan</label>
                    <textarea cols="30" rows="6" type="text" name="peraturan" class="form-control @error('peraturan') is-invalid @enderror" value="{{ old('peraturan') }}" autocomplete="off"></textarea>
                    @error('peraturan')
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
                    <label>Gambar</label><br>
                    <input type="file" name="gambar"  value="{{ old('gambar') }}" autocomplete="off">
                    @error('gambar')
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
