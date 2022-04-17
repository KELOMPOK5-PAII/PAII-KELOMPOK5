@extends('layouts.main')
@section('title', 'Home')
@section('container')

<!--Jumbotron-->
        <div class="container">
            <div class="jumbotron jumbotron-fluid" style= "background: #26231B; "><br><br>
            <div class="row">
                    <div class="col-1"></div>
                    <div class="col-2 text-light" style= "margin-top:150px;">
                        <div class="card" style="width: 22rem; height: 15rem; color: white; border-style: outset; background: #26231B;" >
                            <div class="card-body">
                                <h3>FASILITAS IT DEL</h3>
                                <p class="card-text">Institut Teknologi Del menyediakan berbagai fasilitas kampus untuk mendukung dan menunjang kegiatan yang ada di lingkungan kampus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 text-light" style= "text-align: right;">
                    <img src="{{ asset('foto/Home.jpg') }}" width="850" height="500" class="rounded mx-auto d-block" alt="..."><br>
                    Institut Teknologi Del<br> Jl. Sisingamangaraja,Sitoluama<br> Laguboti, Toba Samosir <br> Sumatera Utara, Indonesia <br><br>
                    </div>
                </div>
            </div>
        </div>

    <center>
        <div class ="container " style= "margin-top:100px; margin-bottom:50px;">
            <div class="row">
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M31 8h-9v25h11V10a2 2 0 0 0-2-2Zm-5 17h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm4 10h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M17.88 3H6.12A2.12 2.12 0 0 0 4 5.12V33h5v-3h6v3h5V5.12A2.12 2.12 0 0 0 17.88 3ZM9 25H7v-2h2Zm0-5H7v-2h2Zm0-5H7v-2h2Zm0-5H7V8h2Zm4 15h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2V8h2Zm4 15h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2V8h2Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                    <br>Konsep bangunan Institut Teknologi Del memadukan arsitektur tradisional nusantara dengan modern
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="currentColor" d="M49.669 15.595C49.212 8.019 42.468 2 34.193 2c-4.92 0-9.297 2.132-12.141 5.448a16.05 16.05 0 0 0-4.229-.571c-8.275 0-14.983 6.229-14.983 13.91c0 2.759.876 5.324 2.368 7.487C3.204 30.736 2 33.792 2 37.116c0 8.115 7.085 14.692 15.824 14.692c3.797 0 7.26-1.264 9.984-3.336c.066.435.127.88.194 1.312c.65 4.244 1.219 8.321.926 12.216l7-.075c-.285-4.349-1.395-8.418-2.517-12.267a13.697 13.697 0 0 0 6.097 1.429c7.087 0 12.84-5.255 13.015-11.796C57.99 37.854 62 33.196 62 27.661c0-6.464-5.462-11.727-12.331-12.066M51.76 36.39l-2.176.572l-.061 2.249c-.131 4.895-4.624 8.876-10.016 8.876c-2.843 0-5.528-1.105-7.438-3.029c-.773-2.71-1.469-5.396-1.912-8.114c1.6-.077 3.158-.272 4.721-.56c2.177-.409 4.314-1.022 6.337-1.896c2.02-.87 3.923-2.008 5.558-3.433a17.04 17.04 0 0 0 3.955-5.006a16.903 16.903 0 0 1-4.275 4.635c-1.695 1.264-3.611 2.217-5.61 2.906c-2.001.691-4.089 1.125-6.194 1.36a33.533 33.533 0 0 1-4.757.195c-.444-3.677-.36-7.413.438-11.088c.882-4.106 2.603-8.089 4.862-11.786c-2.738 3.379-5.041 7.168-6.548 11.331c-.875 2.399-1.447 4.914-1.767 7.467a29.608 29.608 0 0 1-2.152-1.318a24.867 24.867 0 0 1-3.592-2.924c-2.188-2.157-3.928-4.866-4.451-7.952c.184 3.122 1.66 6.118 3.699 8.591a25.828 25.828 0 0 0 3.421 3.428c.92.765 1.86 1.475 2.88 2.133a40.114 40.114 0 0 0-.104 3.684c.029 2.048.199 4.079.433 6.089a24.117 24.117 0 0 1-2.218-.254a21.16 21.16 0 0 1-4.48-1.229c-2.885-1.14-5.489-3.067-7.29-5.643c1.509 2.74 3.961 5.016 6.858 6.515a22.319 22.319 0 0 0 4.583 1.773c.914.239 1.828.433 2.764.573c.02.144.043.283.063.427c-2.436 2.443-5.866 3.847-9.465 3.847C10.753 48.809 5 43.563 5 37.116c0-2.509.876-4.911 2.535-6.947l1.421-1.745l-1.278-1.853c-1.202-1.743-1.837-3.743-1.837-5.784c0-6.016 5.376-10.91 11.983-10.91c1.15 0 2.307.157 3.439.465l1.832.5l1.235-1.441C26.728 6.604 30.323 5 34.193 5c6.634 0 12.116 4.733 12.481 10.775l.161 2.683l2.686.133c5.315.263 9.479 4.246 9.479 9.07c0 4.019-2.978 7.608-7.24 8.729"/></svg>
                    <br>Dikelilingi oleh pepohonan yang membuat di sekitar fasilitas terlihat sejuk, nyaman dan asri
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="currentColor"><path fill-rule="evenodd" d="M36.826 13.643L34.5 6.111l-2.326 7.532l-4.5 2.143l4.52 2.152l2.306 6.59l2.306-6.59l4.52-2.152l-4.5-2.143Zm-3 1.428l.674-2.182l.674 2.183l1.5.714l-1.48.705l-.694 1.982l-.694-1.982l-1.48-.705l1.5-.714Z" clip-rule="evenodd"/><path d="m19 16l1-4l1 4l3 1l-3 1l-1 4l-1-4l-3-1l3-1Z"/><path fill-rule="evenodd" d="M13 39.75v.246a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V29.001a2 2 0 0 1 2-2h3a2 2 0 0 1 1.947 1.539c1.324-.477 2.871-1.045 3.344-1.261c.402-.183.866-.245 1.252-.268a9.059 9.059 0 0 1 1.195.021a14.456 14.456 0 0 1 1.328.168l.023.004l.007.001h.003l.018.004l6.69 1.5l.041.014l.011.004l.046.014a12.764 12.764 0 0 0 .874.223c.575.125 1.3.242 1.975.242c.624 0 1.27.233 1.614.865c.296.542.227 1.138.117 1.55c-.139.514-.425 1.054-.788 1.513c.49-.185 1.027-.404 1.603-.64l.123-.05c1.623-.667 3.547-1.457 5.245-1.737c1.94-.321 3.351.383 3.991 1.632c.57 1.112.438 2.571-.42 3.45c-.215.221-.543.453-.872.666c-.352.229-.785.486-1.266.76a85.495 85.495 0 0 1-3.355 1.782c-2.372 1.203-4.858 2.373-5.648 2.662c-.916.335-1.9.367-2.845.318a37.896 37.896 0 0 1-1.709-.145a54.94 54.94 0 0 0-1.25-.115c-1.928-.146-3.408-.617-4.77-1.05l-.166-.053c-1.408-.446-2.718-.843-4.453-.913c-.396-.016-1.188.014-1.905.048Zm4.12-10.651c.065-.03.235-.073.538-.091c.284-.017.608-.006.925.018a12.572 12.572 0 0 1 1.132.143h.003l6.567 1.473l.045.014a14.864 14.864 0 0 0 1.023.262c.585.128 1.37.262 2.169.285a2.394 2.394 0 0 1-.285.543c-.16.232-.335.411-.479.514c-.416.298-.752.422-.956.475a1.335 1.335 0 0 1-.212.04h-.022l-5.362-.064l-.19 1.984l.178-.984l-.178.984l.053.01l.153.027l.556.098c.467.082 1.108.192 1.806.306c1.374.224 3.03.472 3.97.529c.65.04 1.406-.16 2.109-.395c.733-.245 1.562-.584 2.396-.926c1.717-.704 3.466-1.421 4.935-1.664c1.27-.21 1.723.254 1.885.571c.233.455.107.96-.072 1.142c-.043.045-.2.172-.528.385c-.306.197-.701.434-1.165.697a83.855 83.855 0 0 1-3.272 1.738c-2.392 1.213-4.772 2.326-5.432 2.568c-.534.196-1.195.243-2.054.199a29.13 29.13 0 0 1-1.515-.129a52.37 52.37 0 0 0-1.396-.128c-1.692-.128-2.978-.537-4.357-.975l-.125-.04c-1.428-.453-2.956-.924-4.977-1.005c-.455-.018-1.265.01-1.986.044v-7.101c1.405-.503 3.487-1.258 4.12-1.547Zm2.796-.91l.183-.983l-.183.983ZM11 29H8v10.995h3V29.001Z" clip-rule="evenodd"/></g></svg>
                    <br>Kebersihan merupakan salah satu yang menjadi hal utama untuk merawat dan menjaga area kampus
                </div>
            </div>
        </div>
    </center>

    <br><br>
    <center>
        <div class="container" style=  "margin-bottom:50px;">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('foto/Logo_del.jpg') }}" width="200" class="rounded mx-auto d-block" alt="..." >
                    <button type="button" class="btn btn-secondary" style= "margin-top: -30px;">Secondary</button>
                </div>
                <div class="col">
                    <img src="{{ asset('foto/Logo_del.jpg') }}" width="200" class="rounded mx-auto d-block" alt="..." >
                    <button type="button" class="btn btn-secondary" style= "margin-top: -30px;">Secondary</button>
                </div>
                <div class="col">
                    <img src="{{ asset('foto/Logo_del.jpg') }}" width="200" class="rounded mx-auto d-block" alt="..." >
                    <button type="button" class="btn btn-secondary" style= "margin-top: -30px;">Secondary</button>
                </div>
            </div>
        </div>
    </center>

    @endsection
