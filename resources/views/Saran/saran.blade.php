@extends('layouts.main')
@section('title', 'Saran')
@section('container')

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


@endsection