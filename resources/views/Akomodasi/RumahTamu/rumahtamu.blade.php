@extends('layouts.main')
@section('title', 'Rumah Tamu')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item"><a href="/akomodasi" class="link-primary">Akomodasi</a></li>
  <li class="breadcrumb-item active" aria-current="page">Rumah Tamu</li>
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
                        <img class= "rounded" src="{{  asset('Gambar/RumahTamu/GuestHouse(3).jpg') }}" width="500" height="300" ><br><br> 
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/RumahTamu/GuestHouse pak Luhut.jpg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Rumah Tamu</H2>
                        <hr class="my-4"> 
                        <p style= "font-size: 20px; ">Institut Teknologi Del menyediakan akomodasi bagi tamu yang berkunjung ke Institut Teknologi Del</p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="container px-4">
        <img src="{{ asset('Gambar/RumahTamu/GuestHouse .jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Tampak Depan Rumah Tamu</p>
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
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M16.445 6.168a1 1 0 0 1 1.11 0l6 4A1 1 0 0 1 24 11v8a1 1 0 0 1-1 1H11a1 1 0 0 1-1-1v-8a1 1 0 0 1 .445-.832l6-4ZM16 18h2v-4h-2v4Zm4 0v-5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v5h-2v-6.465l5-3.333l5 3.333V18h-2Zm14.496-5.868a1 1 0 0 0-.992 0l-7 4A1 1 0 0 0 26 17v10a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V17a1 1 0 0 0-.504-.868l-7-4ZM37 26h3v-8.42l-6-3.428l-6 3.428V26h3v-6a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Zm-2 0v-5h-2v5h2Zm-11.553 2.106l-8-4a1 1 0 0 0-.894 0l-8 4A1 1 0 0 0 6 29v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V29a1 1 0 0 0-.553-.894ZM16 34v6h-2v-6h2Zm2-1v7h4V29.618l-7-3.5l-7 3.5V40h4v-7a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p style= "font-size: 20px; "> Institut Teknologi Del menyediakan akomodasi bagi tamu yang berkunjung. Terdapat 6 unit Guest House yang disediakan IT Del untuk para tamu yang berkunjung. Pemandangan indah panorama Danau Toba menambah keasrian fasilitas ini. Fasilitas ini diharapkan memberikan kenyamanan bagi tamu baik tamu akademis maupun non-akademis.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">

            <div class="row">
            <H1>Tujuan</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M16.445 6.168a1 1 0 0 1 1.11 0l6 4A1 1 0 0 1 24 11v8a1 1 0 0 1-1 1H11a1 1 0 0 1-1-1v-8a1 1 0 0 1 .445-.832l6-4ZM16 18h2v-4h-2v4Zm4 0v-5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v5h-2v-6.465l5-3.333l5 3.333V18h-2Zm14.496-5.868a1 1 0 0 0-.992 0l-7 4A1 1 0 0 0 26 17v10a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V17a1 1 0 0 0-.504-.868l-7-4ZM37 26h3v-8.42l-6-3.428l-6 3.428V26h3v-6a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Zm-2 0v-5h-2v5h2Zm-11.553 2.106l-8-4a1 1 0 0 0-.894 0l-8 4A1 1 0 0 0 6 29v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V29a1 1 0 0 0-.553-.894ZM16 34v6h-2v-6h2Zm2-1v7h4V29.618l-7-3.5l-7 3.5V40h4v-7a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p>
                    <ul class="list-unstyled" style= "font-size: 20px; ">
                    <li>Tujuan pembuatan Guest House ini adalah untuk memberikan kenyamanan kepada tamu-tamu yang berkunjung ke Institut Teknologi Del</li>
                    <li>Untuk membuat tamu yang datang ke Institut Teknologi Del nyaman maka Institut Teknologi Del memberikan layanan sebagai berikut:
                        <ul>
                        <li>Menyediakan fasilitas yang lengkap seperti menyediakan dapur dan kamar mandi. </li>
                        <li>Memberikan layanan informasi yang di pandu oleh rektor maupun dosen Institut Teknologi Del </li>
                        <li>Menyajikan pemandangan yang menyejukan mata seperti pemandangan bukit-bukit dan panorama danau toba </li>
                        <li>Menyediakan kantin khusus tamu dan menghidangkan makanan yang bersih dan bergizi</li>
                        </ul>
                    </li>
                    </ul>
                    </p>
                    </div>
                </div>
            </div>

            
            </div>
        </div>

        <br><br>
        @foreach( $rumahtamu as $rt) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $rt->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/RumahTamu')}}/{{ $rt->gambar }}" width="600" height="300" alt="{{ $rt->judul }}">
                    <center>
                        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-20px;" >
                                <p class="card-text" style= "font-size: 20px;">{{ $rt->judul }}</p>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        @endforeach

@endsection