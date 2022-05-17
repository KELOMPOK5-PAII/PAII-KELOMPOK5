@extends('layouts.main')
@section('title', 'Klinik')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Klinik</li>
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
                        <img class= "rounded" src="{{  asset('Gambar/Klinik/Klinik (3).jpg') }}" width="500" height="300" ><br><br> 
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/Klinik/Klinik (2).jpg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Klinik</H2>
                        <hr class="my-4"> 
                        <p style= "font-size: 20px; ">Institut Teknologi Del menyediakan fasilitas klinik yang dapat digunakan oleh seluruh dosen dan staf maupun mahasiswa Institut Teknologi Del.</p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="container px-4">
        <img src="{{ asset('Gambar/Klinik/Klinik (1).jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Tampak Depan Klinik Institut Teknologi Del</p>
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
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="currentColor"><path fill-rule="evenodd" d="M13.02 11.985c.057-.71.242-1.384.531-2H6v2.481l4 3.03v26.52h28V15.531l4.5-3.03V9.984H24.449c.29.616.474 1.29.532 2h14.706L36 14.468v25.547H12V14.503l-3.324-2.518h4.343Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M10 13.75L7.5 10.5h5.75L16.5 17H21l3.5-6.5H41l-3 4V41h-4V24h-8v17H10V13.75ZM14 24h7v7h-7v-7Z" clip-rule="evenodd"/><path d="M6 41a1 1 0 0 0 1 1h34a1 1 0 1 0 0-2H7a1 1 0 0 0-1 1Z"/><path fill-rule="evenodd" d="M25 12a6 6 0 1 1-12 0a6 6 0 0 1 12 0Zm-5-3v2h2v2h-2v2h-2v-2h-2v-2h2V9h2Z" clip-rule="evenodd"/></g></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p style= "font-size: 20px; "> Institut Teknologi Del menyediakan klinik bagi mahasiswa, dosen, staf, dan masyarakat  yang ada di sekitaran Institut Teknologi Del. Klinik ini membantu mahasiswa maupun masyarakat yang membutuhkan penanganan medis. Klinik ini juga menyediakan obat-obatan agar masyarakat dan mahasiswa tidak kesulitan mendapatkan obat. </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">

            <div class="row">
            <H1>Tujuan</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="currentColor"><path fill-rule="evenodd" d="M13.02 11.985c.057-.71.242-1.384.531-2H6v2.481l4 3.03v26.52h28V15.531l4.5-3.03V9.984H24.449c.29.616.474 1.29.532 2h14.706L36 14.468v25.547H12V14.503l-3.324-2.518h4.343Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M10 13.75L7.5 10.5h5.75L16.5 17H21l3.5-6.5H41l-3 4V41h-4V24h-8v17H10V13.75ZM14 24h7v7h-7v-7Z" clip-rule="evenodd"/><path d="M6 41a1 1 0 0 0 1 1h34a1 1 0 1 0 0-2H7a1 1 0 0 0-1 1Z"/><path fill-rule="evenodd" d="M25 12a6 6 0 1 1-12 0a6 6 0 0 1 12 0Zm-5-3v2h2v2h-2v2h-2v-2h-2v-2h2V9h2Z" clip-rule="evenodd"/></g></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px"> 
                    <p>
                    <ul class="list-unstyled" style= "font-size: 20px; ">
                    <li>Tujuan didirikan klinik ini adalah untuk memberikan pelayanan medis kepada dosen, mahasiswa, pengawai del dan masyarakat yang berada di sekitar Institut Teknologi Del.</li>
                    <li>Untuk membuat dosen, mahasiswa, pegawai, dan masyarakat yang di Institut Teknologi Del merasa puas atas layanan klinik maka Institut Teknologi Del menyediakan :
                        <ul>
                        <li>Menyediakan obat-obatan sehingga tidak perlu membeli obat lagi di tempat lain.  </li>
                        <li>Menyiapkan Pelayanan yang baik pada masyarakat maupun seluruh civitas del yang datang ke klink ini</li>
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
        @foreach( $klinik as $k) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $k->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/Klinik')}}/{{ $k->gambar }}" width="600" height="300" alt="{{ $k->judul }}">
                    <center>
                        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-20px;" >
                                <p class="card-text" style= "font-size: 20px;">{{ $k->judul }}</p>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        @endforeach

@endsection