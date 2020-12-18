<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Luis Piñero">
        <title>DMonicake Fit&Fat</title>
        <link rel="icon" href="https://i.postimg.cc/Gtrdvvrj/2.png" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{  asset('css/mystyles.css')}}" type="text/css">
      
    </head>
    <body class="antialiased">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Tienda</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                        </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrate</a></li>
                            </li>
                            @endif
                        @endauth
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="bg-primary py-5 mb-5">
            <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                <h1 class="display-4 text-dark mt-5 mb-2">DMonicake Cocina Fit & Fat</h1>
                <p class="lead mb-5 text-dark-50">¡No dejes para mañana lo que puedes cocinar hoy!</p>
                </div>
            </div>
            </div>
        </header>

        <!-- Page Content -->
  <div class="container">

<div class="row">
  <div class="col-md-12 mb-5">
    <h2>¿Qué Hacemos?</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
    <a class="btn btn-primary btn-lg" href="#">Conoce más &raquo;</a>
  </div>
  
</div>
<!-- /.row -->

<div class="row">
  <div class="col-md-4 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="https://i.postimg.cc/BQ1P66dm/cupcakes.jpg" alt="">
      <div class="card-body">
        <h4 class="card-title">Bisquet Integral</h4>
            <p class="card-text">Te dejo este desayuno sanito y súper sabrosito.</p>
            <p class="card-text">Puedes hacerlo con la fruta que desees. También puedes hacerlo en microondas.</p>
            <p class="card-text">Haz click para comprar</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Añadir a Carrito</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="https://i.postimg.cc/SxF2z44k/pinguinitos.jpg" alt="">
      <div class="card-body">
        <h4 class="card-title">Pingüinitos Fit</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Añadir a Carrito</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="https://i.postimg.cc/mZnFBM6c/torta-de-auyama.jpg" alt="">
      <div class="card-body">
        <h4 class="card-title">Torta de Auyama</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Añadir a Carrito</a>
      </div>
    </div>
  </div>
</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
<div class="container">
  <p class="m-0 text-center text-white">Copyright &copy; Luis Piñero 2020</p>
</div>
<!-- /.container -->
</footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
