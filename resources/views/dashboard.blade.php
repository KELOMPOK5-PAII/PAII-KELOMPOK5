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
</style>

</head>




<!DOCTYPE html>
<html>
<head>
  <title></title>


</head>
<body>

        <div class="container">
  <center><br><br>
  <div class="card" style="max-width: 850px;" id="db">
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
				<p class="card-text">Hai, {{ Auth::user()->name }}!
    <br> Selamat datang di Halaman Admin Website Fasilitas IT Del.</p>

			</div>
		</div>
  <br>
</div>
</body>
</html>

@endsection
