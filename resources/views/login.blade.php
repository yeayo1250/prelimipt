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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/register">REGISTER</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<body background="image.jpg">
        <style>
        body{
            background-repeat: no-repeat, repeat;
        }
        </style>
        <br><br><br><br><br><br><br><br><br>
<div class="container" style="margin-top:-6rem;">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card" style="background-color: #FFB533;">
                <div class="card-header text-white" style="background-color: #FFB533;">
                    <h3 class="card-title" style="text-align:center;">Login Form</h3>
                </div>
             <div class="card-body">
                    <form action="{{url('/login')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                       
                        <button class="btn btn-primary" type="submit">Login</button>
                </form>
             </div>
         </div>
    </div>
</div>


@stop