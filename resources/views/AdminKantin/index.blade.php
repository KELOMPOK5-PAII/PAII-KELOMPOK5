@extends('layouts/main2')

 <!-- Required meta tags -->


 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

        <!-- Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style type="text/css">
            th{
                text-align:center;
            }
            td{
                text-align:justify;
            }
            #info{
                float:right;
            }
        </style>
</head>
@section('title','Kantin | Home')

@section('content')
@include('sweetalert::alert')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="container">

        <center><h2 id="teks">DAFTAR KANTIN IT DEL</h2></center><br><br>
        <div class="info1"> <h4><a href="/AdminKantin/tambah" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Tambah Data</a></h4></div>
        <br>


        <div id="info">
            <form method="GET">
                <div class="info1container d-flex"><input type="search" id="cari" size="35" name="cari"class="form-control rounded-pill " style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder=" Ketik Kata Kunci Pencarian....">&nbsp;&nbsp;<button id="bcari" class="btn btn-outline-primary rounded-circle" type="submit"><i class="fas fa-search"></i></button></div>
            </form>
        </div>


        <table class="table rounded-3 table-striped">
       <thead>

                <tr id="top">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jam Makan</th>
                    <th>Perlengkapan</th>
                    <th>Peraturan</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=0 ?>
                @foreach ($data as $kantin)
                <tr name="potong">
                    <td>{{ $data->firstItem() + $i }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($kantin->namakantin, 80, $end='...') }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($kantin->jammakan, 80, $end='...') }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($kantin->perlengkapan, 80, $end='...') }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($kantin->peraturan, 80, $end='...') }}</td>
                    <td> {{ \Illuminate\Support\Str::limit($kantin->deskripsi, 80, $end='...') }}</td>
                    <td><img width="60px" name="gambar" src="{{asset('Gambar')}}/{{ $kantin->gambar }}" alt=" gambar"></td>
                    <td>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah Data" href="/AdminKantin/ubah/{{ $kantin->id }}"><i class="far fa-edit btn btn-success"></i></a><br><br>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data" href="#" class="delete" data-id="{{ $kantin->id }}" data-judul="{{ $kantin->namakantin}}"><i class="fas fa-trash-alt btn btn-danger"></i></a>



                    </td>
                </tr>
                <?php $i++ ?>
              @endforeach
            </tbody>
        </table>
        <br>
        <div class="item rounded-3 fs-6">
            &nbsp;Menampilkan
            {{ $data->firstItem() }}
            -
            {{ $data->lastItem() }}
            dari
            {{ $data->total() }}
            entri data
        </div>

        <div class="pagination mt-3">
            {{ $data->links() }}
        </div>

        <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

   <script>
       $('.delete').click( function(){
           var kantinid = $(this).attr('data-id');
           var kantinjudul = $(this).attr('data-judul');
        swal({
  title: "Konfirmasi",
  text: "Hapus Data "+kantinjudul+" ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      window.location = "/AdminKantin/hapus/"+kantinid+""
    swal("Data Berhasil Dihapus", {
      icon: "success",
    });
  } else {
    return 0;
  }
});
       });

   </script>



  </body>

</html>
@endsection