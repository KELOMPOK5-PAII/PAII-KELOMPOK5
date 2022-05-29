@extends('layouts.main')
@section('title', 'Parkiran dan Transportasi')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Parkiran dan Transportasi </li>
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
                        <img class= "rounded" src="{{  asset('Gambar/Parkiran/Parkiran (1).jpg') }}" width="500" height="300" ><br><br> 
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/Parkiran/Parkiran (6).jpg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Parkiran</H2>
                        <hr class="my-4"> 
                        <p style= "font-size: 20px; ">Institut Teknologi Del menyediakan fasilitas parkiran yang dapat digunakan oleh dosen dan staf Institut Teknologi Del.</p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="container px-4">
        <img src="{{ asset('Gambar/Parkiran/Parkiran (2).jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Tampak Depan Parkiran Institut Teknologi Del</p>
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
                <button class="nav-link" id="tujuan-tab" data-bs-toggle="tab" data-bs-target="#tujuan" type="button" role="tab" aria-controls="tujuan" aria-selected="true">Tujuan</button>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                <div class="row">
                <H1>Tentang</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="16" height="16" x="4" y="4" rx="2"/><path d="M9 16V8h4a2 2 0 0 1 0 4H9"/></g></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p style= "font-size: 20px; "> Institut Teknologi Del menyediakan tempat parkir bagi dosen dan staf yang ada di Institut Teknologi Del. Tempat parkir ini dapat digunakan para civitas IT Del, maupun tamu-tamu yang berkunjunhg ke IT Del.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">

            <div class="row">
            <H1>Tujuan</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="16" height="16" x="4" y="4" rx="2"/><path d="M9 16V8h4a2 2 0 0 1 0 4H9"/></g></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px"> 
                    <p>
                    <ul class="list-unstyled" style= "font-size: 20px; ">
                    <li>Tujuan pembuatan Parkiran ini adalah untuk memberikan tempat parkir kepada civitas Del yang ada di Institut Teknologi Del. Dan juga sebagai tempat transportasi yang disediakan IT Del untuk mahasiswa.</li>
                    <li>Untuk membuat dosen yang di Institut Teknologi Del nyaman maka Institut Teknologi Del memberikan layanan sebagai berikut:
                        <ul>
                        <li>Menyediakan fasilitas yang lengkap seperti menyediakan dapur dan kamar mandi pada masing-masing rumah dosen. </li>
                        <li>Menyajikan pemandangan menyejukan mata seperti pemandangan bukit-bukit serta panorama danau toba dan memberikan lingkungan yang asri bagi dosen yang tinggal di area Institut Teknologi Del.</li>
                        <li>Beberapa dosen juga dapat menikmati makanan yang disediakan oleh kantin bersama dengan mahasiswa.</li>
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
        @foreach( $parkiran as $p) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $p->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/Parkiran')}}/{{ $p->gambar }}" width="600" height="300" alt="{{ $p->judul }}">
                    <center>
                        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-20px;" >
                                <p class="card-text" style= "font-size: 20px;">{{ $p->judul }}</p>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        @endforeach


        <br><br><br>
        @foreach( $transportasi as $t) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $t->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/Parkiran')}}/{{ $t->gambar }}" width="600" height="300" alt="{{ $t->judul }}">
                    <center>
                        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-20px;" >
                                <p class="card-text" style= "font-size: 20px;">{{ $t->judul }}</p>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        @endforeach

@endsection