@extends('layouts.main')
@section('title', 'Akomodasi')
@section('container')


<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Akomodasi</li>
  </ol>
</nav>
</div>

<!--Jumbotron-->
            <div class="jumbotron jumbotron-fluid" style= "background: #26231B; margin-bottom:50px;"><br><br>  
            <div class="row">
                    <div class="col-1 text-light" style= "margin-left:100px;"><H1>Akomodasi</H1> 
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="500" height="500" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 512"><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"/></svg></div>
                    <div class="col-8 text-light" style= "margin-top:200px; padding-left:550px">
                    <p style= "font-size: 20px; ">Institut Teknologi Del menyediakan akomodasi untuk mahasiswa, dosen dan tamu. Akomodasi di IT Del dilengkapi dengan furniture yang lengkap dan didukung oleh pemandangan indah panoraman Danau Toba menambah keasrian. Akomodasi sebagai Fasilitas di IT Del diharapkan memberikan kenyamanan bagi yang menempati.</p>
                    </div>
                    </div>

                </div>
            </div>


            <section id="akomodasi">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center m-3">
                @foreach( $akomodasi as $a)          
                <div class="col ">
                    <div class="card  shadow-sm" style= "margin-top:50px; width: 150;">
                            <div class="card-header">
                                <h4 class="mt-2 mb-2 fw-normal text-md-center ">{{ $a->judul }}</h4>
                            </div>
                        <div class="card figure">
                            <img class="img-fluib" src="{{asset('Gambar/Akomodasi')}}/{{ $a->foto }}" width="600" height="300" >
                        </div>
                        <div class="card-body">
                        <a href="{{asset('')}}{{ $a->link }}" class="btn text-white" style= "background: #26231B; ">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach

                </div>
                </div> 
            </section>
        
@endsection
