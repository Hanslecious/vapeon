@extends('homepage.layouts.app')
 
 
@section('content')

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-light" id="mainNav">
            <div class="container">
                <h1 class="navbar-brand text-dark" style="font-family: franklin gothic; font-size:28px;" href="#!"><img src="img/logo3.png">VAPE ON</h1>
                <button class="navbar-toggler font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-dark" href="/homepage">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-dark" href="about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-dark" href="product">Products</a></li> 
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-dark btn btn-outline-primary" href="{{ url('/login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

@endsection