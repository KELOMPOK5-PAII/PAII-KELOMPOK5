@extends('layouts.main2')
@section('content')

  <!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
  #db{
    text-align: left;
}
</style>
</head>
<body>
<div class="container">

  <center><br><br>
  <div class="col col-lg-4" id="db">
      <div class="card card-primary card-outline">
<div class="card-body box-profile" >
          <div class="text-center">
          <img class="img-profile rounded-circle" src="{{ url('sbadmin/img/undraw_profile.svg')}}" width="50px" height="50px">
          </div>
          <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>
          <p class="text-muted text-center">Terdaftar sejak : {{ Auth::user()->created_at }} </p>
          <hr>

          <strong>
            <i class="fas fa-solid fa-user mr-2"></i>
            Username
          </strong>
          <p class="text-muted">
          {{ Auth::user()->username }}
          </p>
          <hr>


          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
          {{ Auth::user()->email }}
          </p>

          <!-- <a href="{{ URL::to('admin/setting') }}" class="btn btn-primary btn-block">Setting</a> -->
        </div>
      </div>
</body>
</html>

@endsection
