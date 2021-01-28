@extends('layouts.app')

@section('title', 'Home')

@section('content')
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
        <a class="btn btn-primary btn-lg" href="/aboutus">Conoce más &raquo;</a>
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
          <a href="#" class="btn btn-primary">Ir a Tienda &raquo;</a>
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
          <a href="#" class="btn btn-primary">Ir a Tienda &raquo;</a>
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
          <a href="#" class="btn btn-primary">Ir a Tienda &raquo;</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@endsection
