<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GourmetWallis - Onlineshop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Fontawesome icons -->
    <script src="https://kit.fontawesome.com/79df35558e.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">GourmetWallis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <form class="form-inline" action="/search/">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Suche" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" style="display:none;" type="submit">test</button>
                </form>
            </ul>
            <form class="d-flex" action="/checkout/">
                <button class="btn btn-outline-dark" type="submit">
                    @php
                        $amountInCart = App\Http\Controllers\CartController::getCartTotal();
                    @endphp
                    <i class="bi-cart-fill me-1"></i>
                    Warenkorb
                    <span class="badge bg-dark text-white ms-1 rounded-pill" id="CartTotal">{{$amountInCart}}</span>
                </button>
            </form>
        </div>
    </div>
</nav>


<!-- Header-->
<header class="bg-dark py-5" style="background-image:url('/img/banner.jpg');background-size:cover;background-position:bottom;">
    <div class="container py-5 px-4 px-lg-5 my-5" >
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">GourmetWallis</h1>
            <p class="lead fw-normal text-white mb-0">Was va hie chunnt, chunnt va hie.</p>
            <p class="lead fw-normal text-white-50 mb-0"><small>(isch ja eigentli logisch du idiot)</small></p>
        </div>
    </div>
</header>
