@extends('layouts.main')
@section('title', 'Denah')
@section('container')


<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Denah</li>
  </ol>
</nav>
</div>


<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid" style= "background: #26231B;"><br><br>  
            <div class="row">
                    <div class="col-1 text-light" style= "margin-left:100px; margin-bottom:50px;"><H1>Denah</H1> 
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M507.31 84.69L464 41.37c-6-6-14.14-9.37-22.63-9.37H288V16c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v16H56c-13.25 0-24 10.75-24 24v80c0 13.25 10.75 24 24 24h385.37c8.49 0 16.62-3.37 22.63-9.37l43.31-43.31c6.25-6.26 6.25-16.38 0-22.63zM224 496c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V384h-64v112zm232-272H288v-32h-64v32H70.63c-8.49 0-16.62 3.37-22.63 9.37L4.69 276.69c-6.25 6.25-6.25 16.38 0 22.63L48 342.63c6 6 14.14 9.37 22.63 9.37H456c13.25 0 24-10.75 24-24v-80c0-13.25-10.75-24-24-24z"/></svg>  
                  </div>   
                    <div class="col-8 text-light" style= "margin-top:130px; padding-left:450px">
                    <p style= "font-size: 23px; ">Denah merupakan gambaran dari tata letak, lokasi, atau tempat suatu bangunan secara spesifik yang dapat membantu dalam memudahkan seseorang menemukan lokasi yang dituju dengan disertai keterangan. Berikut adalah gambaran dari Denah IT Del beserta keterangan tempat :</p>
                    </div>                 
                </div>
            </div>
<br><br>

<div class="row">
    <div class="col-1 text-dark" style= "margin-left:100px;"><H1>Denah</H1> 
      <img src="{{ asset('Gambar/denah IT Del rgs.png') }}" width="730" height="700" class="rounded mx-auto d-block" alt="..."><br>
    </div>
    <div class="col-8 text-dark" style= " padding-left:640px; margin-top:60px; margin-bottom:50px; ">
      <div class="card" style="width: 40rem;">
        <div class="card-body">
          <h5 class="card-title">Penjelasan</h5>
          
              <table class="table table-borderless">
              <thead class="table-dark">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Penjelasan</th>
                  </tr>
                </thead>
                @foreach($denah as $d)
                <tbody>
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$d->kode}}</td>
                    <td>{{$d->penjelasan}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              <br>

              <div class="row">
                <div class="col">
                  <div class="card" style="width: 8rem; background:#f7c9a9;">
                    <div class="card-body">
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col">
                  FITE ( Fakultas Informatika dan Teknik Elektro )
                </div>
              </div> 

              <br>

              <div class="row">
                <div class="col">
                  <div class="card" style="width: 8rem; background: #e0edf5;">
                    <div class="card-body">
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col">
                  FTI ( Fakultas Teknik Industri )
                </div>
              </div> 

              <br>

              <div class="row">
                <div class="col">
                  <div class="card" style="width: 8rem; background: #e5f2dd;">
                    <div class="card-body">
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col">
                  FB ( Fakultas Bioteknologi )
                </div>
              </div> 

              <br>

                </div>
                <div class="col">
                 Sumber : Aplikasi Del Augmented Reality
                </div>
              </div> 



          </div>
        </div>
      </div>
</div>


@endsection