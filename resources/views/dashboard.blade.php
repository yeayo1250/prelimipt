@extends('base')

@section('content')
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-gradient text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">IPT PRELIM</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">                      
                      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/">HOME</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">LOGIN</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/register">REGISTER</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">LOG OUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br> <br> <br> <br> <br>
        <video id="video" width="1100px" height="500px" autoplay="autoplay" loop="loop" controls="controls" muted="muted', true">
            <source src="video.mp4 " type="video/mp4">
        </video>
    <body background="image.jpg">
  <style>
  img {border-image-width: cover;}
  .video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 300%;
}
</style>
@endsection