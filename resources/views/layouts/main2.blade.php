<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ url('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<style type="text/css">
.dropdown:hover > .dropdown-menu, .dropright:hover > .dropdown.menu {
    display: block;

}
body {
    font-family: 'Poppins', sans-serif;

}

.dropdown-menu li {
position: relative;
}
.dropdown-menu .dropdown-submenu {
display: none;
position: absolute;
left: 100%;
top: -7px;
}
.dropdown-menu .dropdown-submenu-left {
right: 100%;
left: auto;
}
.dropdown-menu > li:hover > .dropdown-submenu {
display: block;
}

#accordionSidebar {
    font-family: 'Poppins', sans-serif;
    font-style: bold;
    background-image: linear-gradient(#302828, #826F66);
}

#multi {
    background-image: linear-gradient(#826F66);
    font-style: bold;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

</style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
                <div class="sidebar-brand-icon">
                <img src="{{ asset('foto/Logo Fasilitas.png') }}" width="72" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="sidebar-brand-text" style="font-size:8pt">Sistem Informasi
                Fasilitas IT Del</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}" id="navbarDropdownMenuLink" role="button"
                 data-mdb-toggle="dropdown" aria-expanded="false">
                 <i class="fa fa-home" aria-hidden="true"></i>
                    <span><b>Dashboard</b></span>
        </a>


      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false"><i class="fa fa-university" aria-hidden="true"></i>
          <span><b>Fasilitas</b></span>
        </a>
        <ul id="multi" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="{{ url('/AdminAkomodasi')}}">
              <b> Akomodasi &raquo; </b>
            </a>
            <ul class="dropdown-menu dropdown-submenu">
              <li>
              <li>
                <a class="dropdown-item" href="{{ url('/AdminAsrama')}}"><b>Asrama</b></a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ url('/AdminKantin')}}"><b>Kantin</b></a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ url('/AdminRumahDosen')}}"><b>Rumah Dosen</b></a>
              </li>
                <li>
                <a class="dropdown-item" href="{{ url('/AdminRumahTamu')}}"><b>Rumah Tamu</b></a>
              </li>
              </li>
            </ul>

          <li>
            <a class="dropdown-item" href="{{ url('/AdminPerpus')}}">
            <b> Perpustakaan</b>
            </a>
          </li>

          <li>
            <a class="dropdown-item" href="{{ url('/AdminKoperasi')}}">
            <b>     Koperasi</b>
            </a>
          </li>

          <li>
            <a class="dropdown-item" href="{{ url('/AdminKlinik')}}">
            <b>  Klinik</b>
            </a>
          </li>

          <li>
            <a class="dropdown-item" href="{{ url('/AdminPosSatpam')}}">
            <b>  Pos Satpam</b>
            </a>
          </li>

          <li>
            <a class="dropdown-item" href="{{ url('/AdminParkiran')}}">
            <b>  Parkiran</b>
            </a>
          </li>

          <li>
            <a class="dropdown-item" href="{{ url('/AdminParkiranOlahraga')}}">
            <b>  Hiburan dan Olahraga</b>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/AdminAudiotorium')}}">
            <b>  Audiotorium</b>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/AdminLaboratorium')}}">
            <b>Laboratorium</b></b>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/AdminGedung')}}">
            <b>Gedung</b>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/AdminRuangTerbuka')}}">
            <b> Ruang Terbuka</b>
            </a>
          </li>

        </ul>
      </li>



            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AdminDenah')}}">
                <i class="fa fa-map-signs" aria-hidden="true"></i>
                    <span><b>Denah</b></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/AdminPerkembangan')}}">
                <i class="fa fa-industry" aria-hidden="true"></i>
                    <span><b>Perkembangan Fasilitas di IT Del</b></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/datasaran')}}">
                <i class="fa fa-comments" aria-hidden="true"></i>
                    <span><b>Saran</span></b></a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>{{ Auth::user()->name }}</b> </span>
                                <img class="img-profile rounded-circle" src="{{ url('sbadmin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <br><br><br>
            <!-- Footer -->
            <footer class="fixed-bottom bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-light">
                        <span>Copyright &copy; Sistem Informasi Fasilitas IT Del <?php echo date('Y'); ?> - Kelompok 5</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda yakin akan keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('sbadmin/js/sb-admin-2.min.js')}}"></script>

    <!-- Datatables Page level plugins -->
    <script src="{{ url('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Datatables Page level custom scripts -->
    <script src="{{ url('sbadmin/js/demo/datatables-demo.js')}}"></script>

</body>

</html>
