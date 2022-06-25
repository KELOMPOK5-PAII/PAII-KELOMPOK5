@extends('layouts.main')
@section('title', 'Asrama')
@section('container')


<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item"><a href="/akomodasi" class="link-primary">Akomodasi</a></li>
  <li class="breadcrumb-item active" aria-current="page">Asrama</li>
  </ol>
</nav>
</div>

<!--Jumbotron-->
            <div class="jumbotron jumbotron-fluid" style= "background: #26231B;"><br><br>  
            <div class="row">
                    <div class="col-1 text-light" style= "margin-left:100px;"><H1>Asrama</H1> 
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M18.991 2H9.01C7.899 2 7 2.899 7 4.01v5.637l-4.702 4.642A1 1 0 0 0 3 16v5a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4.009C21 2.899 20.102 2 18.991 2zm-8.069 13.111V20H5v-5.568l2.987-2.949l2.935 3.003v.625zM13 9h-2V7h2v2zm4 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V7h2v2z"/><path fill="currentColor" d="M7 15h2v2H7z"/></svg>
                    </div>   
                    <div class="col-8 text-light" style= "margin-top:100px; padding-left:450px">
                    <p style= "font-size: 20px; ">Seluruh Mahasiswa IT Del diwajibkan tinggal di asrama yang sudah dilengkapi fasilitas lengkap untuk mendukung sistem pendidikan mahasiswa secara terstruktur dalam melaksanakan kegiatan akademis dan mandiri serta melatih hidup disiplin dan berbudaya dari peraturan yang berlaku. Di asrama, mahasiswa akan diawasi oleh Pembina Asrama dan dibantu oleh Kakak/Abang Asrama.</p>
                    </div>                 
                </div>
            </div>

    <section id="asrama" class="asrama m">
      <div class = "row row-cols-2 row-cols-md-3 text-md-center d-flex justify-content-center m-4">
        @foreach( $asrama as $a)
        <div class ="col d-flex justify-content-center mb-5" >
          <div class="card" >
            <img src="{{asset('Gambar/Asrama')}}/{{ $a->gambar }}" class="rounded" width="400" height="200">
            <div class="card-body ">
              <h5 class="card-title ">{{$a->namaasrama}}</h5>
              
              <!-- Button trigger modal -->
              <center><button type="button" class="btn d-flex justify-content-center text-white" style= "background: #26231B;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$a->id}}">Selengkapnya</button></center>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{$a->namaasrama}}</h5>
                      <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body" style="text-align: justify;">
                      <table class="table table-hover" cellpadding="10" >
                         <tr>
                            <!--<center><img src="{{asset('Gambar/Asrama')}}/{{ $a->gambar1 }}" class="rounded" width="400" height="250" style= "margin-bottom:30px;" ></center>-->
                         </tr>
                         <tr>
                            <td>Nama Asrama</td>
                            <td>:</td>
                            <td>{{$a->namaasrama}}</td>
                         </tr>
                         <tr>
                            <td>Lokasi</td>
                            <td>:</td>
                            <td>{{$a->lokasi}}</td>
                         </tr>
                         <tr>
                            <td>Jenis Asrama</td>
                            <td>:</td>
                            <td>{{$a->jenisasrama}}</td>
                         </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td>{{$a->deskripsi}}</td>
                        </tr>
                        <tr>
                            <td>Fasilitas</td>
                            <td>:</td>
                            <td>{{$a->fasilitas}}</td>
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