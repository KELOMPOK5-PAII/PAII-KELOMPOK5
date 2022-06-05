@extends('layouts.main2')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
<style>
.box{
    position: absolute
    left: 50%
    margin-left: 375px}
#db{
    text-align: left;
}


.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
</style>

</head>




<!DOCTYPE html>
<html>
<head>
  <title></title>


</head>
<body>


        <div class="container">
  <center>
  <div class="card" style="max-width: 1100px;" id="db">
	<div class="row no-gutters">
		<div class="col-lg-4">
        <div class="card card-primary card-outline">
        <div class="card-body box-profile" >
          <div class="text-center">
          <img class="img-profile rounded-circle" src="{{ url('sbadmin/img/undraw_profile.svg')}}" width="50px" height="50px">
          </div>
          <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>
          <p class="text-muted text-center">{{ Auth::user()->email }} </p>
		</div>
        </div>
        </div>
		<div class="col-md-8">
			<div class="card-body">
				<h4 class="card-title"><b>Dashboard</b></h4>
				<p class="card-text">Hai, <b>{{ Auth::user()->name }}</b>!
    <br> Selamat datang di Halaman Admin Website Fasilitas IT Del.</p>

			</div>
		</div>
  <br>
</div></div>
<br>


<center>
    <div class="main-panel" style="max-width: 1100px;" id="db">
        <div class="content">
            <div class="page-inner">
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm-6 col-md-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Fasilitas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $fasilitas }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-university fa-2x text-gray-300"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm-6 col-md-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row  align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Perkembangan Fasilitas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $perkembangan}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-industry fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm-6 col-md-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Saran
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $saran }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    <!-- Content Row -->

                    <div class="row">
                    </div>
                            </div>
                        </div></div></div></center><br>

<div class="card-deck">
  <div class="card" id="card1"><br>
  <i class="fa fa-university" aria-hidden="true"></i>
    <div class="card-body">
      <h5 class="card-title">Kelola Data Fasilitas</h5><br>
      <p class="card-text">Anda dapat melakukan tambah data, hapus data, dan ubah data fasilitas di IT Del. </p>
      <!-- <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p> -->
    </div>
  </div>

  <div class="card" id="card1"><br>
  <i class="fa fa-map-signs" aria-hidden="true"></i>
    <div class="card-body">
      <h5 class="card-title">Kelola Data Denah</h5><br>
      <p class="card-text">Anda dapat melakukan tambah data, hapus data, dan ubah data denah IT Del.</p>
      <!-- <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p> -->
    </div>
  </div>

  <div class="card" id="card1"><br>
  <i class="fa fa-industry" aria-hidden="true"></i>
    <div class="card-body">
      <h5 class="card-title">Kelola Data Perkembangan</h5>
      <p class="card-text">Anda dapat melakukan tambah data, hapus data, dan ubah data fasilitas IT Del yang sedang dalam pembangunan.</p>
      <!-- <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p> -->
    </div>
  </div>

  <div class="card" id="card1"><br>
  <i class="fa fa-comments" aria-hidden="true"></i>
    <div class="card-body">
      <h5 class="card-title">Kelola Data Saran</h5><br>
      <p class="card-text">Anda dapat melakukan hapus data saran pengguna pada Sistem Informasi Fasilitas IT Del.</p>
    </div>
  </div>
</div>


</body>
</html>

@endsection
