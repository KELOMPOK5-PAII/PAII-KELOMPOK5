@extends('layouts.main')
@section('title', 'kantin')
@section('container')


<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item"><a href="/akomodasi" class="link-primary">Akomodasi</a></li>
  <li class="breadcrumb-item active" aria-current="page">Kantin</li>
  </ol>
</nav>
</div>

<!--Jumbotron-->
            <div class="jumbotron jumbotron-fluid" style= "background: #26231B;"><br><br>  
            <div class="row">
                    <div class="col-1 text-light" style= "margin-left:100px;"><H1>Kantin</H1> 
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="380" height="380" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="currentColor" d="M32.749 46.92c8.648 0 15.674-6.633 15.973-14.92c-.299-8.287-7.325-14.92-15.973-14.92c-8.647 0-15.675 6.633-15.97 14.92c.294 8.287 7.322 14.92 15.97 14.92"/><path fill="currentColor" d="M32.75 10c-12.15 0-22.001 9.85-22.001 22c0 12.149 9.852 22 22.001 22c12.149 0 22-9.851 22-22c0-12.15-9.851-22-22-22m-.001 38c-8.837 0-16.001-6.921-16.001-15.461c0-.182.025-.359.031-.539c-.006-.18-.031-.358-.031-.539c0-8.54 7.165-15.461 16.001-15.461c8.837 0 16 6.921 16 15.461c0 .181-.021.359-.026.539c.006.18.026.357.026.539c-.001 8.54-7.163 15.461-16 15.461"/><path fill="currentColor" d="M3.481 7.421c.24-.941.715-.011.715-.011s.166 9.74 1.246 9.846c1.08.106.248-10.022 1.526-10.216c1.188-.189.51 10.377 1.592 10.27c1.078-.114 1.26-9.85 1.26-9.85s.48-.929.717.005c2.928 11.51.559 16.215.559 16.215s-.4.989-1.35.994c-.089-.005-.022 27.336-.028 31.012c.002 1.787-5.5 1.732-5.497-.047c.004-3.676.111-31.014.025-31.012c-.953 0-1.352-.988-1.352-.988s-2.36-4.702.587-16.218M55.62 7c1.238-.003 6.374 3.7 6.38 17.462c.006 4.401-2.395 4.4-2.391 7.153c.004 2.748.019 24.606.019 24.606s-2.634 1.807-4.592-.084L55 7.391c.002.001-.005-.392.62-.391"/></svg>
                    <div class="col-8 text-light" style= "margin-top:50px; ">
                    </div>
                    </div>

                </div>
            </div>

    <section id="kantin" class="kantin m">
      <div class = "row row-cols-2 row-cols-md-3 text-md-center d-flex justify-content-center m-4">
        @foreach( $kantin as $k)
        <div class ="col d-flex justify-content-center mb-5" >
          <div class="card" >
            <img src="{{asset('Gambar/Kantin')}}/{{ $k->gambar }}" class="rounded" width="400" height="200">
            <div class="card-body ">
              <h5 class="card-title ">{{$k->namakantin}}</h5>
              
              <!-- Button trigger modal -->
              <center><button type="button" class="btn d-flex justify-content-center text-white" style= "background: #26231B;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id}}">Selengkapnya</button></center>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$k->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{$k->namakantin}}</h5>
                      <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body" style="text-align: left;">
                      <table class="table table-hover" cellpadding="10" >
                         <tr>
                         <img src="{{asset('Gambar/Kantin')}}/{{ $k->gambar1 }}" class="rounded" width="460" height="250" style= "margin-bottom:30px;" >
                        </tr>

                         <tr>
                            <td>Nama Kantin</td>
                            <td>:</td>
                            <td>{{$k->namakantin}}</td>
                         </tr>
                        <tr>
                        <tr>
                            <td>Jam Makan</td>
                            <td>:</td>
                            <td>{{$k->jammakan}}</td>
                         </tr>
                         <tr>
                            <td>Perlengkapan Yang Wajib Di Bawa</td>
                            <td>:</td>
                            <td>{{$k->perlengkapan}}</td>
                         </tr>
                         <tr>
                            <td>Peraturan di Kantin</td>
                            <td>:</td>
                            <td>{{$k->peraturan}}</td>
                         </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td>{{$k->deskripsi}}</td>
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