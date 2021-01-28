@extends('layouts.main')
@section('title')
    {{ $category->name}}
@endsection

@section('content')
  <!-- Page Content -->
  <div class="container mt-5">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">{{ $category->name }}</h1>
        
            @empty($category)
                <div class="alert alert-warning">
                    La lista de categorías esta vacia
                </div>
            @else
                <div class="list-group">
                    <a href="{{ route('store.index')}}" class="list-group-item">Mostrar Todos los productos</a>
                    <a href="{{ route('store.categories.show', $category->name)}}" class="list-group-item">{{ $category->name }}</a>
            @endempty

        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          
          @if(@empty($products))
            <div class="alert alert-warning">
                La lista de productos esta vacia
            </div>
          @else
          @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="{{ route('store.product.show', $product->name)}}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body mb-6">
                  <h4 class="card-title">
                    <a href="{{ route('store.product.show', $product->name)}}">{{ $product->name}}</a>
                  </h4>
                  <h5>{{$currencies->find(1)->name}} {{$costs->find($product->cost_id)->cost}}</h5> 
                  {{-- corregir aqui --}}
                  <p class="card-text text-wrap text-truncate">{{$product->description}}</p>
                </div>
                <div class="card-footer">
                  @if ($product->stock < 1)
                    AGOTADO  
                  @else
                    Stock: {{$product->stock}}  
                  @endif                       
                </div>
              </div>
            </div>
            @endforeach
          @endif

        </div>
    <!-- /.row -->
      </div>
  </div>
  <!-- /.container -->

@endsection