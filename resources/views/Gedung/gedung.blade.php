@extends('layouts.main')
@section('title', 'Gedung')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Gedung</li>
  </ol>
</nav>
</div>

<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid" style= "background: #26231B; margin-bottom:50px;"><br><br>  
            <div class="row">
                    <div class="col-1 text-light" style= "margin-left:100px;  margin-bottom:50px;"><H1>Gedung</H1> 
                    <svg  style= " margin-top:20px;"xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="300" height="381.82" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1408 1792"><path fill="currentColor" d="M384 1312v64q0 13-9.5 22.5T352 1408h-64q-13 0-22.5-9.5T256 1376v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T352 1152h-64q-13 0-22.5-9.5T256 1120v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zm256 0v64q0 13-9.5 22.5T608 1152h-64q-13 0-22.5-9.5T512 1120v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zM384 800v64q0 13-9.5 22.5T352 896h-64q-13 0-22.5-9.5T256 864v-64q0-13 9.5-22.5T288 768h64q13 0 22.5 9.5T384 800zm768 512v64q0 13-9.5 22.5t-22.5 9.5h-64q-13 0-22.5-9.5t-9.5-22.5v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zm-256-256v64q0 13-9.5 22.5T864 1152h-64q-13 0-22.5-9.5T768 1120v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zM640 800v64q0 13-9.5 22.5T608 896h-64q-13 0-22.5-9.5T512 864v-64q0-13 9.5-22.5T544 768h64q13 0 22.5 9.5T640 800zM384 544v64q0 13-9.5 22.5T352 640h-64q-13 0-22.5-9.5T256 608v-64q0-13 9.5-22.5T288 512h64q13 0 22.5 9.5T384 544zm768 512v64q0 13-9.5 22.5t-22.5 9.5h-64q-13 0-22.5-9.5t-9.5-22.5v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zM896 800v64q0 13-9.5 22.5T864 896h-64q-13 0-22.5-9.5T768 864v-64q0-13 9.5-22.5T800 768h64q13 0 22.5 9.5T896 800zM640 544v64q0 13-9.5 22.5T608 640h-64q-13 0-22.5-9.5T512 608v-64q0-13 9.5-22.5T544 512h64q13 0 22.5 9.5T640 544zM384 288v64q0 13-9.5 22.5T352 384h-64q-13 0-22.5-9.5T256 352v-64q0-13 9.5-22.5T288 256h64q13 0 22.5 9.5T384 288zm768 512v64q0 13-9.5 22.5T1120 896h-64q-13 0-22.5-9.5T1024 864v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zM896 544v64q0 13-9.5 22.5T864 640h-64q-13 0-22.5-9.5T768 608v-64q0-13 9.5-22.5T800 512h64q13 0 22.5 9.5T896 544zM640 288v64q0 13-9.5 22.5T608 384h-64q-13 0-22.5-9.5T512 352v-64q0-13 9.5-22.5T544 256h64q13 0 22.5 9.5T640 288zm512 256v64q0 13-9.5 22.5T1120 640h-64q-13 0-22.5-9.5T1024 608v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zM896 288v64q0 13-9.5 22.5T864 384h-64q-13 0-22.5-9.5T768 352v-64q0-13 9.5-22.5T800 256h64q13 0 22.5 9.5T896 288zm256 0v64q0 13-9.5 22.5T1120 384h-64q-13 0-22.5-9.5T1024 352v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zM896 1664h384V128H128v1536h384v-224q0-13 9.5-22.5t22.5-9.5h320q13 0 22.5 9.5t9.5 22.5v224zM1408 64v1664q0 26-19 45t-45 19H64q-26 0-45-19t-19-45V64q0-26 19-45T64 0h1280q26 0 45 19t19 45z"/></svg>
                    </div>
                    <div class="col-9 text-light" style= "margin-top:150px; padding-left:300px">
                    <p style= "font-size: 23px; ">Institut Teknologi Del menyediakan beberapa gedung untuk mendukung kegiatan perkuliahan dan belajar mengajar untuk mata kuliah sehari-hari. Gedung ini juga berisi laboratorium yang digunakan oleh mahasiswa untuk melakukan praktik.
                    Ruangan kelas yang disediakan di gedung ini sangat bersih dan rapi yang membuat mahasiswa nyaman dalam melakukan proses belajar.</p>
                    </div>

                </div>
            </div>

        <section id="gedung" class="gedung m">
          <div class = "row row-cols-2 row-cols-md-3 text-md-center d-flex justify-content-center m-4">
            @foreach( $gedung as $a)
            <div class ="col d-flex justify-content-center mb-5" >
              <div class="card" >
                <img src="{{asset('Gambar/Gedung')}}/{{ $a->gambar }}" class="rounded" width="400" height="200">
                <div class="card-body ">
                  <h5 class="card-title ">{{$a->namagedung}}</h5>
                  <!-- Button trigger modal -->
                  <center><button type="button" class="btn d-flex justify-content-center text-white" style= "background: #26231B;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$a->id}}">Selengkapnya</button></center>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$a->namagedung}}</h5>
                          <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"  style="text-align: justify;">
                          <table class="table table-hover" cellpadding="10">
                          <tr>
                          <center><img src="{{asset('Gambar/Gedung')}}/{{ $a->gambar1 }}" class="rounded" width="400" height="250" style= "margin-bottom:30px;" ></center>
                            </tr>
                            <tr>
                                <td>Nama Gedung</td>
                                <td>:</td>
                                <td>{{$a->namagedung}}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>{{$a->deskripsi}}</td>
                            </tr>
                            <tr>
                                <td>Peraturan</td>
                                <td>:</td>
                                <td>{{$a->aturan}}</td>
                            </tr>
                            <tr>
                                <td>Jam Operasional</td>
                                <td>:</td>
                                <td>{{$a->jamoperasional}}</td>
                            </tr>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div><br><br>
            @endforeach
        </div>
      </div>
    </section>

@endsection
