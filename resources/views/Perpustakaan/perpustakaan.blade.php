@extends('layouts.main')
@section('title', 'Perpustakaan')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Perpustakaan</li>
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
                        <img class= "rounded" src="{{  asset('Gambar/Perpus/Perpustakaan.jpg') }}" width="500" height="300" ><br><br> 
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/Perpus/perpus2.jpg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Perpustakaan</H2>
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
        <img src="{{ asset('Gambar/Perpus/Perpustakaan.jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Tampak depan Perpustakaan IT Del</p>
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
                <button class="nav-link" id="visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab" aria-controls="visi" aria-selected="true">Visi dan Misi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="jam-tab" data-bs-toggle="tab" data-bs-target="#jam" type="button" role="tab" aria-controls="jam" aria-selected="false">Jam Operasional</button>
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
                    <p style= "font-size: 20px; ">  Perpustakaan Politeknik Informatika Del (PI Del) berdiri sejak tanggal 9 Januari 2002 dengan sistem pelayanan open acces (terbuka). 
                    Selanjutnya berubah nama seiring dengan berubahnya status Politeknik menjadi Institut sejak tahun 2013. 
                    Perpustakaan berganti nama menjadi Perpustakaan Institut Teknologi Del. 
                    Perpustakaan Institut Teknologi Del memiliki fungsi utama yaitu fungsi pendidikan. 
                    Pengadaan koleksi dan pengembangan minat baca internal dan eksternal Institut Teknologi Del dilakukan sebagai bagian dari kegiatan diseminasi kegiatan peningkatan minat baca.          
                    </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="visi" role="tabpanel" aria-labelledby="visi-tab">

            <div class="row">
            <H1>Visi & Misi</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M3.5 2C2.67 2 2 2.67 2 3.498v12.981c0 .828.671 1.498 1.5 1.498h1c.827 0 1.499-.67 1.499-1.498V3.498C5.999 2.67 5.327 2 4.499 2h-1Zm4.998 0c-.828 0-1.5.67-1.5 1.498v12.981c0 .828.672 1.498 1.5 1.498h1c.828 0 1.499-.67 1.499-1.498V3.498c0-.827-.671-1.498-1.5-1.498h-1Zm7.22 4.157a1.5 1.5 0 0 0-1.87-1.106l-.745.21a1.498 1.498 0 0 0-1.06 1.742l2.003 9.799a1.5 1.5 0 0 0 1.839 1.151l.985-.25c.79-.2 1.274-.994 1.092-1.787l-2.244-9.76Z"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p>
                    <ul class="list-unstyled" style= "font-size: 20px; ">
                    <li>Perpustakaan IT Del memiliki visi yaitu “Sebagai pusat informasi terkemuka yang menyediakan layanan informasi cetak maupun cetak dan juga penyedia layanan informasi berteknologi tinggi.</li>
                    <li>Untuk mencapai visi dimaksud, misi yang diemban oleh Perpustakaan IT Del adalah sebagai berikut:
                        <ul>
                        <li>Menyediakan layanan pustaka yang mendukungprogram-program akademik dan non akademik. </li>
                        <li>Memberikan layanan informasi cetak maupun noncetak bagi seluruh civitas akademika PI Del maupun kepada masyarakat umum. - Meningkatkan cara dan proses diseminasi koleksi lebih efisien dan efektif. </li>
                        <li>Meningkatkan keragaman koleksi demi peningkatan mutu layanan</li>
                        </ul>
                    </li>
                    </ul>
                </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="jam" role="tabpanel" aria-labelledby="jam-tab">

            <div class="row">
                <H1>Jam Operasional</H1> 
                        <div class="col-1 text-dark" style= "margin-left:100px;">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M3.5 2C2.67 2 2 2.67 2 3.498v12.981c0 .828.671 1.498 1.5 1.498h1c.827 0 1.499-.67 1.499-1.498V3.498C5.999 2.67 5.327 2 4.499 2h-1Zm4.998 0c-.828 0-1.5.67-1.5 1.498v12.981c0 .828.672 1.498 1.5 1.498h1c.828 0 1.499-.67 1.499-1.498V3.498c0-.827-.671-1.498-1.5-1.498h-1Zm7.22 4.157a1.5 1.5 0 0 0-1.87-1.106l-.745.21a1.498 1.498 0 0 0-1.06 1.742l2.003 9.799a1.5 1.5 0 0 0 1.839 1.151l.985-.25c.79-.2 1.274-.994 1.092-1.787l-2.244-9.76Z"/></svg>
                        </div>
                        <div class="col-9 text-dark" style= "padding-left:350px">
                            <p>
                                <ul class="list-unstyled" style= "font-size: 20px; ">
                                <li> Waktu Operasional : 
                                    <ul>
                                    <li>Senin-Jumat: 08:00-21:45 WIB </li>
                                    <li>Sabtu: 08:00-12:00 WIB</li>
                                    </ul>
                                </li>
                                <li>Kunjungan : 
                                    <ul>
                                    <li>Untuk alasan keamanan, pengunjung tidak diperbolehkan membawa tas, folder atau jaket ke dalam perpustakaan. Barang-barang tersebut harus disimpan dalam loker yang disediakan. Setiap kerusakan atau kehilangan barang-barang pribadi menjadi risiko pemiliknya.</li>
                                    <li>Perpustakaan IT Del pada dasarnya adalah tempat untuk belajar. Untuk alasan ini, semua pengunjung harus tetap tenang sepanjang waktu didalam perpustakaan dan menghormati orang lain yang sedang belajar. Selain itu, perpustakaan harus tetap dijaga kebersihan dan kerapiannya oleh semua pengunjungnya</li>
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
        @foreach( $perpus as $p) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $p->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/Perpus')}}/{{ $p->gambar }}" width="600" height="300" alt="{{ $p->judul }}">
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