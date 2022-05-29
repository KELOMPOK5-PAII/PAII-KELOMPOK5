@extends('layouts.main')
@section('title', 'Pos Satpam')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Pos Satpam</li>
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
                        <img class= "rounded" src="{{  asset('Gambar/PosSatpam/20220416_100438.jpg') }}" width="500" height="300" ><br><br> 
                        <img class= "rounded" style= "margin-left:100px;" src="{{ asset('Gambar/PosSatpam/20220416_100927.jpg') }}" width="300" height="200" >
                    </div>
                    <div class="col-10 text-light" style= "margin-top:200px; padding-left:450px">
                        <H2>Pos Satpam</H2>
                        <hr class="my-4"> 
                        <p style= "font-size: 20px; ">Institut Teknologi Del menyediakan fasilitas Pos Satpam yang dapat bertugas memberikan keamanan bagi seluruh dosen dan staf maupun mahasiswa Institut Teknologi Del.</p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="container px-4">
        <img src="{{ asset('Gambar/PosSatpam/20220416_112647.jpg') }}" class="img-fluid" alt="..." style="width: 100%;
            height: 700px;">
            <center>
        <div class="card" style="width: 30rem; height: 3rem; color: white; border-style: outset; background: #26231B; margin-top:-30px;" >
                <p class="card-text" style= "font-size: 20px;">Tampak Depan Pos Satpam Institut Teknologi Del</p>
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
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M13.5 10.097C13.5 7.774 24 6 24 6s10.5 1.774 10.5 4.097c0 3.097-1.91 4.403-1.91 4.403H15.41s-1.91-1.306-1.91-4.403Zm12 .403a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0Zm6.314 7.78c1.39-1.085 1.174-2.28 1.174-2.28H15.012s-.217 1.195 1.174 2.28a8 8 0 1 0 15.629 0ZM24 20c2.721 0 4.623-.314 5.952-.766a6 6 0 1 1-11.903 0c1.328.452 3.23.766 5.951.766Zm1.5 10a1 1 0 0 1 1 1v1.382a1 1 0 0 1-.553.894l-.447.224l.577 2.885l4.24-6.36c.29 0 .56.002.804.004C36.526 31.262 42 33.776 42 37.558V42H6v-4.442c0-3.782 5.713-6.325 11.118-7.558c-.019.004.184.007.555.01l4.284 6.425l.543-2.935l-.447-.224a1 1 0 0 1-.553-.894V31a1 1 0 0 1 1-1h3Zm9.5 5.333s-1.333-.666-2-1.333c-.667.667-2 1.333-2 1.333S31.698 38 33 38s2-2.667 2-2.667Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px">
                    <p style= "font-size: 20px; "> Institut Teknologi Del menyediakan fasilitas Pos Satpam. Fasilitas ini disediakan guna menjaga keamanan luar dan dalam kampus adalah adanya pos satpam.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">

            <div class="row">
            <H1>Tujuan</H1> 
                    <div class="col-1 text-dark" style= "margin-left:100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M13.5 10.097C13.5 7.774 24 6 24 6s10.5 1.774 10.5 4.097c0 3.097-1.91 4.403-1.91 4.403H15.41s-1.91-1.306-1.91-4.403Zm12 .403a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0Zm6.314 7.78c1.39-1.085 1.174-2.28 1.174-2.28H15.012s-.217 1.195 1.174 2.28a8 8 0 1 0 15.629 0ZM24 20c2.721 0 4.623-.314 5.952-.766a6 6 0 1 1-11.903 0c1.328.452 3.23.766 5.951.766Zm1.5 10a1 1 0 0 1 1 1v1.382a1 1 0 0 1-.553.894l-.447.224l.577 2.885l4.24-6.36c.29 0 .56.002.804.004C36.526 31.262 42 33.776 42 37.558V42H6v-4.442c0-3.782 5.713-6.325 11.118-7.558c-.019.004.184.007.555.01l4.284 6.425l.543-2.935l-.447-.224a1 1 0 0 1-.553-.894V31a1 1 0 0 1 1-1h3Zm9.5 5.333s-1.333-.666-2-1.333c-.667.667-2 1.333-2 1.333S31.698 38 33 38s2-2.667 2-2.667Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="col-9 text-dark" style= "margin-top:0px; padding-left:350px"> 
                    <p>
                    <ul class="list-unstyled" style= "font-size: 20px; ">
                    <li>Tujuan didirikan Pos satpam ini adalah untuk memberikan keamanan kepada dosen, mahasiswa, pengawai del yang berada di sekitar Institut Teknologi Del.</li>
                    </ul>
                    </p>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <br><br><br>
        @foreach( $pos as $p) 
            <div class="container">
                <div class="row">
                    <div class="col" style= "padding-top:60px;" >
                    {{ $p->deskripsi }}
                    </div>
                    <div class="col"  style= "padding-top:10px; padding-bottom:30px;">
                    <img class="img-fluib" src="{{asset('Gambar/PosSatpam')}}/{{ $p->gambar }}" width="600" height="300" alt="{{ $p->judul }}">
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