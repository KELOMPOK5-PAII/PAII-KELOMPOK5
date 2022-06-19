<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--- CSS -->
    <link rel="stylesheet" href="{{asset('css')}}/style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ url('foto/favicon.ico') }}">
    <title>@yield('title')</title>
  </head>
  <body>
    <!--Jumbotron-->
    <div class="jumbotron" >
                    <div class="row">
                        <div class="col-2">
                        <img src="{{ asset('foto/Logo Fasilitas.png') }}" width="150" class="rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-4">
                        <center>
                        <br>
                        <h2 class="display-" >SISTEM INFORMASI FASILITAS</h2>
                        <h2 class="display-" >Institut Teknologi Del</h2></center>
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-2">
                        <img src="{{ asset('foto/Logo_del.jpg') }}" width="130" class="rounded mx-auto d-block" alt="...">
                        </div>
            </div>
    </div>


<!--Navbar-->
<div class="nav1">
  <ul class="nav justify-content-center">
        <li class=" nav-item"><a class="nav-link" aria-current="page" href="{{asset('/')}}">Beranda</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" href="{{('/fasilitas')}}">Fasilitas</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{asset('/akomodasi')}}">Akomodasi</a></li>
                        <li><a class="dropdown-item" href="{{asset('/laboratorium')}}">Laboratorium</a></li>
                        <li><a class="dropdown-item" href="{{asset('/gedung')}}">Gedung</a></li>
                        <li><a class="dropdown-item" href="{{asset('/ruangterbuka')}}">Ruang Terbuka</a></li>
                        <li><a class="dropdown-item" href="{{asset('/perpustakaan')}}">Perpustakaan</a></li>
                        <li><a class="dropdown-item" href="{{asset('/koperasi')}}">Koperasi</a></li>
                        <li><a class="dropdown-item" href="{{asset('/klinik')}}">Klinik</a></li>
                        <li><a class="dropdown-item" href="{{asset('/auditorium')}}">Auditorium</a></li>
                        <li><a class="dropdown-item" href="{{asset('/possatpam')}}">Pos Satpam</a></li>
                        <li><a class="dropdown-item" href="{{asset('/parkirandantransportasi')}}">Parkiran dan Transportasi</a></li>
                        <li><a class="dropdown-item" href="{{asset('/hiburandanolahraga')}}">Hiburan dan Olahraga</a></li>
                    </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/perkembangan')}}">Perkembangan Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/denah')}}">Denah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/saran')}}">Saran</a>
            </li>

            <li class="nav-item">
                <a class="nav-item btn btn-info tombol" href="{{ route('login') }}">Login Admin</a>
            </li>
        </ul>
</div>
        <hr class="my-4">


@yield('container')

<!-- Footer -->
<section id="footer" class="bg-dark text-light">
    <br><br>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="col">
            <img  src="{{ asset('foto/Logo_del.jpg') }}" width="130" class="rounded mx-auto d-block" alt="..." title="Ini adalah langit pagi" align="left"/><br><br><br><br><br><br>
            <p>Institut Teknologi Del<br>Institut Teknologi Del Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara, Indonesia</p>
            </div>
            <div class="col">
            <div class="referens">
            <h2 style="color:darkcyan">Link Terkait</h2><br>
            <h5><a href="https://www.del.ac.id/">Institut Teknologi Del</a></h5>
            <h5><a href="http://spmbapp.del.ac.id/">Penerimaan Mahasiswa Baru</a></h5>
            </div>
            </div>

            <div class="col">
            <div class="referens">
            <h2 style="color:darkcyan">Bantuan</h2><br>
            <h5><a href="{{asset('/denah')}}">Denah</a></h5>
            </div>
            </div>

            <div class="col">
            <div class="referens">
            <h3 style="color:darkcyan">Hubungi Kami </h2>
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608a17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42a18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>+62 632 331116<br>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12c0-7 7-7 13-7s13 0 13 7c0 8-7-1-7-1H10s-7 9-7 1Zm8 2s-5 5-5 14h20c0-9-5-14-5-14H11Z"/><circle cx="16" cy="21" r="4"/></g></svg> +62 632 331116<br>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M32 6H4a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-1.54 22H5.66l7-7.24l-1.44-1.39L4 26.84V9.52l12.43 12.37a2 2 0 0 0 2.82 0L32 9.21v17.5l-7.36-7.36l-1.41 1.41ZM5.31 8h25.07L17.84 20.47Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="none" d="M0 0h36v36H0z"/></svg> info@del.ac.id<br><br>

            <h3 style="color:darkcyan">Temukan Kami</h2>

            <a href="https://www.facebook.com/Institut.Teknologi.Del/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg></a>
                    <a href="https://www.instagram.com/it.del/?hl=en"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" ><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg></a>
                    <a href="https://twitter.com/institut_del"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/></svg></a>
            </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <br><div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); font-size: 14px; ">
        © 2022 Copyright | Sistem Informasi Fasilitas Insitut Teknologi Del
    </div>
    <!-- Copyright -->
</section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
