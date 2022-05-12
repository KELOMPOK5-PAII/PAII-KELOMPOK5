@extends('layouts.main')
@section('title', 'Koperasi')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Koperasi</li>
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
                        <img class= "rounded" src="{{  asset('Gambar/Koperasi/Koperasi (3).jpg') }}" width="500" height="300" ><br><br> 
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/Koperasi/Koperasi (2).jpg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Koperasi</H2>
                        <hr class="my-4"> 
                        <p style= "font-size: 20px; ">Institut Teknologi Del menyediakan fasilitas Koperasi yang dapat digunakan oleh seluruh dosen dan staf maupun mahasiswa Institut Teknologi Del.</p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="container px-4">
        <img src="{{ asset('Gambar/Koperasi/Koperasi (1).jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Tampak Depan Koperasi Institut Teknologi Del</p>
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
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M11 11.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5Zm1 2.5v-2h2v2h-2ZM5 2a.5.5 0 0 0-.384.18l-2.5 3A.5.5 0 0 0 2 5.5V7c0 .888.386 1.687 1 2.236V17.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5V9.236c.614-.55 1-1.348 1-2.236V5.482c0-.09 0-.162-.116-.302l-2.5-3A.5.5 0 0 0 15 2H5Zm0 7a2 2 0 0 1-2-2V6h4v1a2 2 0 0 1-2 2Zm5 0a2 2 0 0 1-2-2V6h4v1a2 2 0 0 1-2 2Zm5 0a2 2 0 0 1-2-2V6h4v1a2 2 0 0 1-2 2ZM5 17H4V9.83a2.997 2.997 0 0 0 3.5-1.17A2.997 2.997 0 0 0 10 10a2.997 2.997 0 0 0 2.5-1.341a2.997 2.997 0 0 0 3.5 1.17V17h-6v-5.5a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0-.5.5V17ZM7.14 5H3.568l1.666-2h2.572L7.14 5Zm4.666 0H8.194l.666-2h2.28l.666 2Zm1.054 0l-.666-2h2.572l1.667 2H12.86ZM6 17v-5h3v5H6Z"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p style= "font-size: 20px; "> Institut Teknologi Del menyediakan Koperasi bagi mahasiswa, dosen, staf, dan masyarakat  yang ada di sekitaran Institut Teknologi Del. Koperasi ini membantu mahasiswa maupun masyarakat yang membutuhkan keperluan asrama maupun keperluan kampus. Koperasi ini juga menyediakan peralatan yang lumayan lengkap agar masyarakat dan mahasiswa tidak kesulitan mendapatkan perlengkapan tersebut. </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">

            <div class="row">
            <H1>Tujuan</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M11 11.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5Zm1 2.5v-2h2v2h-2ZM5 2a.5.5 0 0 0-.384.18l-2.5 3A.5.5 0 0 0 2 5.5V7c0 .888.386 1.687 1 2.236V17.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5V9.236c.614-.55 1-1.348 1-2.236V5.482c0-.09 0-.162-.116-.302l-2.5-3A.5.5 0 0 0 15 2H5Zm0 7a2 2 0 0 1-2-2V6h4v1a2 2 0 0 1-2 2Zm5 0a2 2 0 0 1-2-2V6h4v1a2 2 0 0 1-2 2Zm5 0a2 2 0 0 1-2-2V6h4v1a2 2 0 0 1-2 2ZM5 17H4V9.83a2.997 2.997 0 0 0 3.5-1.17A2.997 2.997 0 0 0 10 10a2.997 2.997 0 0 0 2.5-1.341a2.997 2.997 0 0 0 3.5 1.17V17h-6v-5.5a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0-.5.5V17ZM7.14 5H3.568l1.666-2h2.572L7.14 5Zm4.666 0H8.194l.666-2h2.28l.666 2Zm1.054 0l-.666-2h2.572l1.667 2H12.86ZM6 17v-5h3v5H6Z"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px"> 
                    <p>
                    <ul class="list-unstyled" style= "font-size: 20px; ">
                    <li>Tujuan didirikan Koperasi ini adalah untuk memberikan pelayanan seperti menyediakan perlengkapan kampus kepada dosen, mahasiswa, pengawai del dan masyarakat yang berada di sekitar Institut Teknologi Del.</li>
                    <li>Untuk membuat dosen, mahasiswa, pegawai, dan masyarakat yang di Institut Teknologi Del merasa puas atas layanan koperasi ini maka Institut Teknologi Del menyediakan :
                        <ul>
                        <li>Menyediakan peralatan kuliah dan peralatan asrama sehingga tidak perlu membeli obat lagi di tempat lain.  </li>
                        <li>Menyiapkan Pelayanan yang baik pada masyarakat maupun seluruh civitas del yang datang ke koperasi ini</li>
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
        @foreach( $koperasi as $k) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $k->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/Koperasi')}}/{{ $k->gambar }}" width="600" height="300" alt="">
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