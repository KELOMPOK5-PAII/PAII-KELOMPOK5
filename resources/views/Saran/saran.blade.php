
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
       <h2> Saran </h2>
        <div class="row">
            <div class="col">
              <div class="container card rounded" class="hero rounded-3 px-5 pb-5 pt-5">
                  <br>
                  <form action="/saran/simpan" method="post">
                    @csrf
                      <div class="form-group mt-3">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autocomplete="off" placeholder="Tuliskan Nama Anda">
                          @error('nama')
                              <div class="invalid-feedback">{{  $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group mt-3">
                          <label for="saran">Saran</label>
                          <textarea type="text" name="saran" class="form-control @error('saran') is-invalid @enderror" value="{{ old('saran') }}" autocomplete="off" placeholder="Tuliskan saran anda "></textarea>
                          @error('saran')
                              <div class="invalid-feedback">{{  $message }}</div>
                          @enderror
                      </div>
                      <br>
                      <div class="form-group mt-3">
                      <button type="submit" style="float: right;" class="btn btn-primary" style='font-size:16px'><i class='far fa-paper-plane save_btn'></i> Simpan</button>
                      </div>
                  </form>
                  <br>
              </div>
            </div>
        </div>
    </div><br>

    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


@endsection

<!-- @push('javascript')

<script>
    $(document).ready(function() {

        var pusher = new Pusher('4fd3a0fb9e0062624e70', {
        cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data)){
                alert(JSON.stringify(data));
        }


        $('.save_btn').on('click', function(e) {
            let nama = $('#nama').val();
            let saran = $('#saran').val();

            const form = $(this).parents('form');

            $(form).validate({
                rules: {
                    nama: {
                        required: true
                    }
                },
                message: {
                    nama: "nama is required"
                },
                submitHandler: function() {
                    var formData = new FormData(form[0]);

                    $.ajax({
                        type: 'POST',
                        url: '/saran/simpan',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data){
                            console.log(data);
                            if(data.status){
                                $('#notifDiv').fadeIn();
                                $('#notifDiv').css('background',
                                'green');
                                $('#notifDiv').text(data.message);
                                setTimeout(() => {
                                    $('#notifDiv').fadeOut();
                                },3000);
                                $('[name="nama"]');
                                $('textarea[name="saran"]');
                            }else {
                                $('#notifDiv').fadeIn();
                                $('#notifDiv').css('background',
                                'red');
                                $('#notifDiv').text('Something went wrong');
                                setTimeout(() => {
                                    $('#notifDiv').fadeOut();
                                }, 3000);
                            }
                        }
                    })
                }
            })
        });
    });
</script>

@endpush -->
