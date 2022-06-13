@extends('layouts.main')
@section('title', 'Parkiran dan Transportasi')
@section('container')

<!--Jumbotron-->
<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid" style= "background: #26231B;"><br><br>
            <div class="row">
                    <div class="col-1 text-light" style= "margin-left:100px;"><H1>Perkembangan Fasilitas</H1>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M6 21H3a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1zm7 0h-3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1zm7 0h-3a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1z"/></svg>
                </div>
                    <div class="col-9 text-light" style= "margin-top:100px; padding-left:450px">
                    <p style= "font-size: 20px; ">Halaman Perkembangan akan berisi data perkembangan pembangunan fasilitas di Institut Teknologi Del</p>
                    </div>
                </div>
            </div>
<br><br>

<div class="container"><center><b style= "font-size: 25px; "> Perkembangan Pembangunan yang ada di IT Del </b></center><br>
              <table class="table table-borderless">
              <thead class="table-dark">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Pembangunan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                @foreach($perkembangan as $p)
                <tbody>
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$p->perkembangan}}</td>
                    <td>{{$p->deskripsi}}</td>
                    @if($p->status==1)
                    <td>Proses</td>
                    @else
                    <td>Selesai</td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>
@endsection
