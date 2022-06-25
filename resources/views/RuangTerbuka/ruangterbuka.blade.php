@extends('layouts.main')
@section('title', 'Ruangan Terbuka')
@section('container')

<div class="container" >
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
  <li class="breadcrumb-item"><a href="/" class="link-primary">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page">Ruang Terbuka</li>
  </ol>
</nav>
</div> 
<!--Jumbotron-->
            <div class="jumbotron jumbotron-fluid" style= "background: #26231B;"><br><br>  
            <div class="row text-light">
            <H1 style= "margin-left:100px;" >Ruangan Terbuka</H1> 
                    <div class="col-1 text-light" style= "margin-left:100px;  margin-bottom:50px;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="400" height="400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><circle cx="42.748" cy="13.407" r=".912" fill="currentColor"/><circle cx="49.271" cy="10.602" r="1.509" fill="currentColor"/><circle cx="46.96" cy="18.062" r="1.588" fill="currentColor"/><circle cx="55.844" cy="12.073" r=".723" fill="currentColor"/><circle cx="53.799" cy="18.644" r=".566" fill="currentColor"/><path fill="currentColor" d="M0 0v64h64V0H0m59.886 48.922H38.832v-4.111h21.054v4.111m-16.495-9.534a3.362 3.362 0 0 1 2.617-3.276c-.003-.058-.017-.111-.017-.169a3.367 3.367 0 0 1 6.734 0c0 .031-.009.061-.01.094a3.362 3.362 0 0 1 2.61 3.273c0 .289-.048.565-.116.834a3.364 3.364 0 0 1 2.62 3.277c0 .133-.015.262-.032.39H40.91a2.663 2.663 0 0 1-.023-.312a3.363 3.363 0 0 1 2.62-3.277a3.337 3.337 0 0 1-.116-.834M49.359 24c-5.318 0-9.63-4.311-9.63-9.628c0-5.319 4.312-9.629 9.63-9.629c5.317 0 9.627 4.311 9.627 9.629c0 5.317-4.309 9.628-9.627 9.628M18.094 62c-.213-3.261-.41-6.993-.588-9.636c-.01-.137-.018-.273-.026-.41a74.969 74.969 0 0 0-2.271-10.293c-.512-1.728-1.135-3.402-1.808-5.059l-7.046-15.45c-1.636-3.59 1.35-6.669 1.35-6.669c-.111 1.042-.138 1.83-.016 2.659c.318-.813.609-1.274.609-1.274c-.111 1.056-.138 1.851-.01 2.692c.326-.849.631-1.332.631-1.332c-.105.985-.135 1.745-.034 2.525c.317-.81.607-1.268.607-1.268c-.104.985-.135 1.744-.033 2.524c.315-.809.605-1.268.605-1.268c-.096.913-.129 1.63-.053 2.351c.307-.768.578-1.199.578-1.199c-.089.849-.123 1.531-.065 2.203c.302-.756.57-1.181.57-1.181c-.109 1.042-.137 1.83-.014 2.66c.317-.814.607-1.274.607-1.274c-.111 1.056-.137 1.851-.009 2.691c.326-.849.63-1.33.63-1.33c-.104.985-.135 1.744-.033 2.524c.316-.81.606-1.268.606-1.268c-.104.985-.134 1.744-.033 2.523c.315-.809.606-1.268.606-1.268c-.098.912-.129 1.631-.054 2.35c.306-.766.578-1.197.578-1.197s-.41 2.921-.246 6.471a67.535 67.535 0 0 1 1.509 3.778c.713 1.972 1.291 3.988 1.796 6.022c.009.031.016.063.022.094l-.061-1.285c-.05-1.131-.072-2.265-.107-3.396l-.912-18.319c-.197-3.941 3.715-5.701 3.715-5.701c-.486.929-.803 1.651-.994 2.467c.596-.639 1.035-.958 1.035-.958c-.494.939-.811 1.667-1.002 2.498c.616-.669 1.076-1.005 1.076-1.005c-.46.878-.768 1.572-.961 2.334c.593-.636 1.03-.954 1.03-.954c-.46.877-.769 1.571-.962 2.334c.593-.637 1.03-.955 1.03-.955c-.426.813-.722 1.467-.917 2.165c.567-.6.98-.901.98-.901c-.397.757-.682 1.378-.876 2.023c.56-.591.966-.887.966-.887c-.485.928-.803 1.65-.994 2.467c.596-.64 1.035-.959 1.035-.959c-.492.94-.81 1.669-1.002 2.498c.616-.669 1.078-1.004 1.078-1.004c-.462.878-.77 1.572-.963 2.334c.593-.636 1.031-.955 1.031-.955c-.461.878-.77 1.571-.963 2.333c.593-.635 1.031-.953 1.031-.953c-.427.813-.723 1.467-.918 2.164c.567-.6.98-.9.98-.9s-1.458 2.563-2.616 5.92c.033 1.941.092 3.883.174 5.824c.125 2.928.292 5.854.483 8.777l.018.289c.03.215.059.434.086.654c.082-1.404.188-2.807.316-4.206a120.401 120.401 0 0 1 2.52-15.795c.426-1.862.935-3.7 1.497-5.522c-.006.01-.014.02-.019.03c1.387-5.597 3.279-13.242 4.456-17.995c.948-3.831 5.202-4.387 5.202-4.387c-.734.748-1.247 1.349-1.665 2.075c.755-.44 1.269-.62 1.269-.62c-.743.757-1.258 1.364-1.68 2.102c.782-.462 1.32-.65 1.32-.65c-.694.708-1.189 1.283-1.594 1.958c.75-.439 1.262-.618 1.262-.618c-.693.708-1.189 1.284-1.596 1.958c.752-.438 1.264-.618 1.264-.618c-.642.654-1.113 1.197-1.502 1.809c.715-.411 1.197-.58 1.197-.58c-.598.611-1.049 1.122-1.422 1.685c.707-.404 1.182-.571 1.182-.571c-.734.748-1.244 1.349-1.664 2.075c.755-.44 1.27-.62 1.27-.62c-.744.757-1.259 1.365-1.681 2.103c.782-.463 1.321-.651 1.321-.651c-.695.708-1.189 1.282-1.596 1.958c.752-.438 1.264-.618 1.264-.618c-.695.707-1.189 1.283-1.596 1.958c.752-.438 1.263-.617 1.263-.617c-.642.654-1.113 1.196-1.503 1.809c.717-.412 1.199-.581 1.199-.581s-1.911 1.819-3.876 4.455a101.354 101.354 0 0 0-1.407 4.357c-1.495 5.069-2.498 10.302-3.182 15.539a124.687 124.687 0 0 0-.44 3.895a73.348 73.348 0 0 1 1.594-6.377c.266-.889.567-1.764.881-2.635l-.019.022l.054-.128c.901-2.481 1.973-4.898 3.086-7.294l4.082-9.652c1.538-3.634 5.824-3.518 5.824-3.518c-.843.624-1.439 1.137-1.969 1.788c.815-.316 1.351-.413 1.351-.413c-.853.631-1.456 1.15-1.988 1.813c.845-.334 1.406-.437 1.406-.437c-.797.59-1.375 1.081-1.883 1.684c.811-.315 1.344-.411 1.344-.411c-.795.588-1.375 1.08-1.881 1.682c.811-.314 1.344-.412 1.344-.412c-.738.547-1.288 1.007-1.768 1.551c.771-.294 1.273-.384 1.273-.384c-.686.508-1.211.944-1.667 1.44c.761-.29 1.257-.378 1.257-.378c-.844.624-1.443 1.136-1.969 1.788c.813-.316 1.35-.413 1.35-.413c-.854.632-1.457 1.149-1.988 1.813c.844-.336 1.404-.437 1.404-.437c-.795.591-1.375 1.081-1.881 1.683c.811-.314 1.344-.41 1.344-.41c-.798.589-1.375 1.08-1.881 1.683c.811-.314 1.344-.411 1.344-.411c-.738.545-1.289 1.008-1.768 1.551c.771-.293 1.273-.385 1.273-.385s-2.614 1.801-5.216 4.482a60.994 60.994 0 0 0-.845 2.186c-1.43 3.938-2.408 8.061-3.08 12.191c-.492 3.036-.793 7.279-.936 10.978h-1.316zm22.293 0V50.922h18.135V62H40.387"/><path fill="currentColor" d="M50.882 54.583a.756.756 0 0 0 .014-.144c0-.745 0-1.347-1.536-1.347c-1.537 0-1.537.602-1.537 1.347c0 .05.004.097.013.144c-1.549.361-1.549 1.367-1.549 2.551c0 1.489 2.114 2.695 3.073 2.695c1.09 0 3.07-1.206 3.07-2.695c0-1.184 0-2.19-1.548-2.551M46.455 42.05a1.677 1.677 0 0 0 .361 1.449a1.679 1.679 0 0 0 .315-1.466a1.686 1.686 0 0 0 1.265-1.28a1.68 1.68 0 0 0-1.613.608a1.679 1.679 0 0 0-1.663-.551a1.684 1.684 0 0 0 1.335 1.24m3.864-1.319a1.692 1.692 0 0 0 1.337 1.242a1.682 1.682 0 0 0 .359 1.447a1.676 1.676 0 0 0 .316-1.466a1.683 1.683 0 0 0 1.264-1.278a1.678 1.678 0 0 0-1.611.607a1.681 1.681 0 0 0-1.665-.552m-1.264-2.793a1.68 1.68 0 0 0 .361 1.449a1.68 1.68 0 0 0 .316-1.466a1.685 1.685 0 0 0 1.264-1.28a1.682 1.682 0 0 0-1.613.608a1.67 1.67 0 0 0-1.282-.595c-.132 0-.259.016-.38.042a1.681 1.681 0 0 0 1.334 1.242"/></svg>
                    </div>
                    <div class="col-7 text-light" style= "margin-left:320px; margin-top:130px; ">
                    <p style= "font-size: 23px; ">Institut Teknologi Del menyediakan ruang terbuka yang dapat digunakan civitas del baik itu untuk kerja kelompok, belajar individu maupun bersantai</p>
                    </div>

                </div>
            </div>


    <section id="ruangterbuka" class="ruangterbuka m">
      <div class = "row row-cols-2 row-cols-md-3 text-md-center d-flex justify-content-center m-4">
        @foreach( $ruangterbuka as $rk)
        <div class ="col d-flex justify-content-center mb-5" >
          <div class="card" >
            <img src="{{asset('Gambar\Ruangan Terbuka')}}/{{ $rk->gambar }}" class="rounded" width="400" height="200">
            <div class="card-body ">
              <h5 class="card-title ">{{$rk->namart}}</h5>
              <!-- Button trigger modal -->
              <center><button type="button" class="btn d-flex justify-content-center text-white" style= "background: #26231B;" data-bs-toggle="modal" data-bs-target="#exampleModal{{$rk->id}}">Selengkapnya</button></center>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$rk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{$rk->namart}}</h5>
                      <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: justify;">
                      <table class="table table-hover" cellpadding="10">
                      <tr>
                     
                     <!--<center> <img src="{{asset('Gambar/Ruangan Terbuka')}}/{{ $rk->gambar1 }}" class="rounded" width="400" height="250" style= "margin-bottom:30px;" ></center>-->
                    </tr>
                        <tr>
                            <td>Nama Ruang Terbuka</td>
                            <td>:</td>
                            <td>{{$rk->namart}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td>{{$rk->deskripsi}}</td>
                        </tr>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div><br><br>
        @endforeach
    </div>
  </div>
</section>

<script>
$(document).ready(function() {
    $('#myCarousel').carousel({
	    interval: 10000
	})
});
</script>

@endsection
