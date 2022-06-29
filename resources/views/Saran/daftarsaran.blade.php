@extends('layouts.main')
@section('title', 'Saran')
@section('container')
@include('sweetalert::alert')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <style>
      label, button{
        font-family: 'Concert One', cursive;
      }
    </style>

<div id="notifDiv"></div>
    <div class="container">
       <h2> Daftar Saran </h2> <br>


       @foreach($saran as $d)
        <div class="card">
        @if($d->verify==1)
        <div class="card-header">{{$d->nama}}</div>
        <div class="card-body">
            <p class="card-text">{{$d->saran}}</p>
        </div>
        @endif
        </div><br>
        @endforeach

    </div><br>
@endsection
