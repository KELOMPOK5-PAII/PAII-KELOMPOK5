@extends('layouts.main')
@section('title', 'Laboratorium')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Laboratorium</li>
  </ol>
</nav>
</div>

<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid" style= "background: #26231B; margin-bottom:50px;"><br><br>  
            <div class="row">
                    <div class="col-1 text-light" style= "margin-left:100px;  margin-bottom:50px;"><H1>Laboratorium</H1> 
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="300" height="300" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M16.432 15C14.387 9.893 12 8.547 12 6V3h.5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5H8v3c0 2.547-2.387 3.893-4.432 9c-.651 1.625-2.323 4 6.432 4s7.083-2.375 6.432-4zm-1.617 1.751c-.702.21-2.099.449-4.815.449s-4.113-.239-4.815-.449c-.249-.074-.346-.363-.258-.628c.22-.67.635-1.828 1.411-3.121c1.896-3.159 3.863.497 5.5.497s1.188-1.561 1.824-.497a15.353 15.353 0 0 1 1.411 3.121c.088.265-.009.553-.258.628z" clip-rule="evenodd"/></svg>
                    <svg style= "margin-left:200px;"xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="300" height="300" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="currentColor" d="M400 32c26.5 0 48 21.49 48 48v256c0 26.5-21.5 48-48 48H266.7l10.6 32H352c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.67 0-32-14.3-32-32s14.33-32 32-32h74.7l10.6-32H48c-26.51 0-48-21.5-48-48V80c0-26.51 21.49-48 48-48h352zM64 96v224h320V96H64zm528-64c26.5 0 48 21.49 48 48v352c0 26.5-21.5 48-48 48h-64c-26.5 0-48-21.5-48-48V80c0-26.51 21.5-48 48-48h64zm-48 64c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16h-32zm0 96h32c8.8 0 16-7.2 16-16s-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16s7.2 16 16 16zm16 208c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32z"/></svg>
                    
                    </div>
                    <div class="col-9 text-light" style= "margin-top:200px; padding-left:450px">
                    <p style= "font-size: 25px; "> Institut Teknologi Del menyediakan beberapa laboratorium yang menjadi pusat pembelajaran dan penelitian. Adapun fungsi laboratorium di IT Del, antara lain : Sebagai laboratorium pengajaran Sebagai laboratorium mandiri mahasiswa Sebagai laboratorium pelatihan</p>
                    </div>

                </div>
            </div>

    <section id="laboratorium" class="laboratorium m">
      <div class = "row row-cols-2 row-cols-md-3 text-md-center d-flex justify-content-center m-4">
        @foreach( $laboratorium as $l)
        <div class ="col d-flex justify-content-center mb-5" >
          <div class="card" >
            <img src="{{asset('Gambar/Lab')}}/{{ $l->gambar }}" class="rounded" width="400" height="200">
            <div class="card-body ">
              <h5 class="card-title ">{{$l->namalab}}</h5>
              <!-- Button trigger modal -->
              <center><button type="button" class="btn d-flex justify-content-center text-white" style= "background: #26231B;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$l->id}}">Selengkapnya</button></center>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$l->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{$l->namalab}}</h5>
                      <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"  style="text-align: justify;">
                      <table class="table table-hover" cellpadding="10">
                      <tr>
                      <center><img src="{{asset('Gambar/Lab')}}/{{ $l->gambar1 }}" class="rounded" width="400" height="250" style= "margin-bottom:30px;" >
</center>  
                    </tr>
                        <tr>
                            <td>Nama Laboratorium</td>
                            <td>:</td>
                            <td>{{$l->namalab}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td>{{$l->deskripsi}}</td>
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
