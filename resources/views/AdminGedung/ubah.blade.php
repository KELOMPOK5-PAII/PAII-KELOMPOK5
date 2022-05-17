@extends('layouts/main2')
<style>
            button{
                float: right;
            }
        </style>
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('title','Gedung | Ubah')

@section('content')

<div class="container">
            <br>
            <center><h2 id="teks"><i class="far fa-edit" aria-hidden="true"></i>&nbsp; UBAH DATA GEDUNG</h2></center><br><br>
            <h5><a href="/AdminGedung" class="badge badge-pill badge-secondary">Kembali</a><br><br></h5>

            <div class="hero rounded-3 px-5 pb-5 pt-5">
                <form enctype="multipart/form-data" action="/AdminGedung/update/{{ $gedung->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="namagedung" class="form-control @error('namagedung') is-invalid @enderror" value="{{ $gedung->namagedung }}">
                        @error('namagedung')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group mt-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="6" class="form-control @error('deskripsi') is-invalid @enderror">{{ $gedung->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group mt-3">
                        <label for="deskripsi">Jam Operasional</label>
                        <textarea name="jamoperasional" id="jamoperasional" cols="30" rows="6" class="form-control @error('jamoperasional') is-invalid @enderror">{{ $gedung->jamoperasional }}</textarea>
                        @error('jamoperasional')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="deskripsi">Aturan</label>
                        <textarea name="aturan" id="aturan" cols="30" rows="6" class="form-control @error('aturan') is-invalid @enderror">{{ $gedung->aturan }}</textarea>
                        @error('aturan')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group mt-3">
                        <label>Gambar 1</label><br>
                        <img src="{{asset('Gambar/Gedung')}}/{{ $gedung->gambar }}" alt="Gambar gedung" style="max-width:100px; margin-top:20px;"><br>
                        <input type="file" name="gambar"  value=" {{ $gedung->gambar }}">

                    </div>


                    <div class="form-group mt-3">
                        <label>Gambar 2</label><br>
                        <img src="{{asset('Gambar/Gedung')}}/{{ $gedung->gambar1 }}" alt="Gambar gedung" style="max-width:100px; margin-top:20px;"><br>
                        <input type="file" name="gambar1"  value=" {{ $gedung->gambar1 }}">

                    </div>

                    <div class="form-group mt-3">
                    <br><br>
                        <button type="submit" class="btn btn-success">Ubah</button>
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
