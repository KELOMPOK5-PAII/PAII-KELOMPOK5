@extends('layouts.main')
@section('title', 'Auditorium')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Auditorium</li>
  </ol>
</nav>
</div> 

<!--Jumbotron-->
        <div class="jumbotron jumbotron-fluid" style= "background:#887E7E; margin-bottom:20px;"><br><br>
        <div class="container px-4">
        <div class="row">
            <div class="col">
            <div class="p-3 border" style= "background: #26231B; margin-bottom:50px;">
                <div class="row">
                    <div class="col-1 text-light" style= "margin-left:50px;">
                        <img class= "rounded" src="{{  asset('Gambar/Auditorium/Auditorium dalam (1).jpg') }}" width="500" height="300" ><br><br>
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/Auditorium dalam (2).jpg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Auditorium</H2>
                        <hr class="my-4">
                        <p style= "font-size: 20px; ">Institut Teknologi Del memiliki ruang baca dengan beragam koleksi buku dan literatur ilmiah</p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="container px-4">
        <img src="{{ asset('Gambar/Auditorium/Auditorium (luar).jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Tampak depan auditorium IT Del</p>
        </div>
        </center>
</div>
        <br><br><br>

        <div class="container">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang" type="button" role="tab" aria-controls="tentang" aria-selected="false">Tentang</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="jam-tab" data-bs-toggle="tab" data-bs-target="#jam" type="button" role="tab" aria-controls="jam" aria-selected="false">Penggunaan Auditorium</button>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                <div class="row">
                <H1>Tentang</H1>
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M3.5 2C2.67 2 2 2.67 2 3.498v12.981c0 .828.671 1.498 1.5 1.498h1c.827 0 1.499-.67 1.499-1.498V3.498C5.999 2.67 5.327 2 4.499 2h-1Zm4.998 0c-.828 0-1.5.67-1.5 1.498v12.981c0 .828.672 1.498 1.5 1.498h1c.828 0 1.499-.67 1.499-1.498V3.498c0-.827-.671-1.498-1.5-1.498h-1Zm7.22 4.157a1.5 1.5 0 0 0-1.87-1.106l-.745.21a1.498 1.498 0 0 0-1.06 1.742l2.003 9.799a1.5 1.5 0 0 0 1.839 1.151l.985-.25c.79-.2 1.274-.994 1.092-1.787l-2.244-9.76Z"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p style= "font-size: 20px; ">
                    IT Del memiliki Auditorium yang terletak di sebelah kiri Perpustakaan dan berada di sebelah kiri EH. Auditorium ini digunakan oleh dosen dan mahasiswa untuk
                    berbagai kegiatan. Auditorium ini juga digunakan untuk pertemuan antara tamu tamu yang di undang ke IT Del.
                    </p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="jam" role="tabpanel" aria-labelledby="jam-tab">

            <div class="row">
                <H1>Penggunaan Auditorium</H1>
                        <div class="col-1 text-dark" style= "margin-left:100px;">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M3.5 2C2.67 2 2 2.67 2 3.498v12.981c0 .828.671 1.498 1.5 1.498h1c.827 0 1.499-.67 1.499-1.498V3.498C5.999 2.67 5.327 2 4.499 2h-1Zm4.998 0c-.828 0-1.5.67-1.5 1.498v12.981c0 .828.672 1.498 1.5 1.498h1c.828 0 1.499-.67 1.499-1.498V3.498c0-.827-.671-1.498-1.5-1.498h-1Zm7.22 4.157a1.5 1.5 0 0 0-1.87-1.106l-.745.21a1.498 1.498 0 0 0-1.06 1.742l2.003 9.799a1.5 1.5 0 0 0 1.839 1.151l.985-.25c.79-.2 1.274-.994 1.092-1.787l-2.244-9.76Z"/></svg>
                        </div>
                        <div class="col-9 text-dark" style= "padding-left:350px">
                            <p>
                                <ul class="list-unstyled" style= "font-size: 20px; ">
                                <li> Penggunaan Auditorium
                                    <ul>
                                    <li>Penggunaan auditorium ini tidaklah bebas, mahasiswa yang akan menggunakan tempat ini harus melakukan pemesanan menggunakan website CIS()</li>
                                    <li>Pemesanan auditorium ini dapat dilakukan 1 hari sebelum kegiatan dilakukan</li>
                                    </ul>
                                </li>
                                </ul>
                            </p>
                        </div>
                </div>
            </div>
            </div>
        </div>

        <br><br><br>
        @foreach( $audit as $p)
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $p->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/Auditorium')}}/{{ $p->gambar }}" width="600" height="300" alt="{{ $p->judul }}">
                    <center>
                        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-20px;" >
                                <p class="card-text" style= "font-size: 20px;">{{ $p->judul }}</p>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        @endforeach


@endsection
