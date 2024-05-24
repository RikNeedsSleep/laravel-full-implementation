@extends('layouts.index')

@section('title', 'Cafe Page')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="path-to-your-logo.png" alt="Amandemy Logo" height="30">
        <span class="ml-2">Amandemy MARKET</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-links" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PRODUCTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-info text-white" href="{{ url('/login') }}">LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row" style="height:600px;">
        <div class="col-md-8 my-auto px-5">
            <h3 class="fw-semibold">Discover. Connect. Thrive.</h3>
            <h1 class="fw-bold" style="font-size: 64px">Transform Your Shopping Experience</h1>
            <p class="fw-semibold text-secondary text-justify mt-3">
                Discover the joy of shopping with AMANDEMY MARKET, where convenience meets style. 🛒 Dive into a world of endless possibilities, from the latest fashion trends to cutting-edge electronics. 🛍️ Our curated collection ensures you find exactly what you need, effortlessly. Embrace the ease of online shopping with fast delivery and secure transactions. Shop smarter, live better. Experience AMANDEMY MARKET today! 🌟
            </p>
            <a href="{{ url('/products') }}" class="btn btn-lg btn-info fw-bold">
                Buy Now!
            </a>
        </div>
        <div class="col-md-4 my-auto">
            <img class="img-fluid rounded" src="https://i.pinimg.com/736x/ff/1a/d4/ff1ad43f10afcf927ed3024c5fe3ebd5.jpg" alt="">
        </div>
    </div>
</div>
@endsection
