@extends('layouts.main')
@section('title', 'Hiburan dan Olahraga')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Hiburan dan Olahraga</li>
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
                        <img class= "rounded" src="{{  asset('Gambar/Hiburan/ho (6).jpg') }}" width="500" height="300" ><br><br> 
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/Hiburan/ho (2).jpeg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Hiburan dan Olahraga</H2>
                        <hr class="my-4"> 
                        <p style= "font-size: 20px; ">Institut Teknologi Del menyediakan fasilitas Hiburan dan Olahraga yang dapat digunakan oleh seluruh dosen dan staf maupun mahasiswa Institut Teknologi Del.</p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="container px-4">
        <img src="{{ asset('Gambar/Hiburan/ho (5).jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Lapangan Hijau</p>
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
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M4.708 4a7.969 7.969 0 0 1 4.296-1.939c.062.43.14.909.24 1.408c.18.9.43 1.88.776 2.777c.276.719.623 1.409 1.062 1.965L10 9.293L4.708 4ZM4 4.709a7.968 7.968 0 0 0-1.94 4.296c.43.062.908.14 1.407.24c.9.18 1.88.43 2.777.776c.719.276 1.41.623 1.965 1.062L9.293 10L4 4.708Zm3.496 7.088c-.43-.32-.982-.601-1.61-.843c-.827-.318-1.747-.554-2.615-.728A25.37 25.37 0 0 0 2 10.005a7.97 7.97 0 0 0 2 5.287l3.497-3.496ZM4.706 16l3.497-3.496c.32.43.6.982.842 1.61c.318.826.554 1.747.728 2.614c.09.448.162.88.22 1.273a7.97 7.97 0 0 1-5.286-2Zm4.21-4.21L10 10.708L15.292 16a7.97 7.97 0 0 1-4.296 1.94c-.063-.43-.142-.909-.241-1.408c-.18-.9-.43-1.88-.775-2.777c-.277-.718-.623-1.409-1.063-1.964ZM16 15.293a7.968 7.968 0 0 0 1.94-4.296c-.43-.062-.909-.14-1.408-.24c-.9-.18-1.88-.43-2.777-.775c-.718-.277-1.409-.623-1.965-1.063L10.707 10L16 15.292Zm-3.497-7.087c.43.32.983.6 1.61.842c.827.318 1.748.554 2.615.728c.448.09.88.162 1.273.22a7.97 7.97 0 0 0-2-5.287l-3.498 3.497ZM15.292 4a7.97 7.97 0 0 0-5.287-2c.058.393.13.825.22 1.273c.174.868.41 1.788.728 2.614c.242.628.522 1.18.842 1.61l3.497-3.496Z"/></svg>
                </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p style= "font-size: 20px; "> Selain Fasilitas untuk keperluan belajar. Institut Teknologi Del menyediakan sarana hiburan dan olehraga bagi mahasiswa, dosen dan staf Institut Teknologi Del.</p>   
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">

            <div class="row">
            <H1>Tujuan</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M4.708 4a7.969 7.969 0 0 1 4.296-1.939c.062.43.14.909.24 1.408c.18.9.43 1.88.776 2.777c.276.719.623 1.409 1.062 1.965L10 9.293L4.708 4ZM4 4.709a7.968 7.968 0 0 0-1.94 4.296c.43.062.908.14 1.407.24c.9.18 1.88.43 2.777.776c.719.276 1.41.623 1.965 1.062L9.293 10L4 4.708Zm3.496 7.088c-.43-.32-.982-.601-1.61-.843c-.827-.318-1.747-.554-2.615-.728A25.37 25.37 0 0 0 2 10.005a7.97 7.97 0 0 0 2 5.287l3.497-3.496ZM4.706 16l3.497-3.496c.32.43.6.982.842 1.61c.318.826.554 1.747.728 2.614c.09.448.162.88.22 1.273a7.97 7.97 0 0 1-5.286-2Zm4.21-4.21L10 10.708L15.292 16a7.97 7.97 0 0 1-4.296 1.94c-.063-.43-.142-.909-.241-1.408c-.18-.9-.43-1.88-.775-2.777c-.277-.718-.623-1.409-1.063-1.964ZM16 15.293a7.968 7.968 0 0 0 1.94-4.296c-.43-.062-.909-.14-1.408-.24c-.9-.18-1.88-.43-2.777-.775c-.718-.277-1.409-.623-1.965-1.063L10.707 10L16 15.292Zm-3.497-7.087c.43.32.983.6 1.61.842c.827.318 1.748.554 2.615.728c.448.09.88.162 1.273.22a7.97 7.97 0 0 0-2-5.287l-3.498 3.497ZM15.292 4a7.97 7.97 0 0 0-5.287-2c.058.393.13.825.22 1.273c.174.868.41 1.788.728 2.614c.242.628.522 1.18.842 1.61l3.497-3.496Z"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px"> 
                    <p>
                    <ul class="list-unstyled" style= "font-size: 20px; ">
                    <li>Tujuan dari pembuatan sarana ini adalah sebagai media untuk menghilangkan kejenuhan dari kegiatan sehari-hari di IT Del.</li>
                    <li>Untuk membuat dosen, mahasiswa, pegawai, dan masyarakat yang di Institut Teknologi Del merasa puas akan sarana hiburan dan olahraga ini maka Institut Teknologi Del menyediakan :
                        <ul>
                        <li>Menyediakan peralatan peralatan olahraga sehingga mahasiswa,dosen, dan staf dapat berolahraga dengan teman-temannya.</li>
                        <li>Menyediakan perlatan musik yang dapat digunakan saat ada kegiatan dan acara.</li>
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
        @foreach( $hiburan as $ho) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $ho->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/Hiburan')}}/{{ $ho->gambar }}" width="600" height="300" alt="">
                    <center>
                        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-20px;" >
                                <p class="card-text" style= "font-size: 20px;">{{ $ho->judul }}</p>
                        </div>
                    </center>
                    </div>
                </div>
            </div>
        @endforeach

@endsection