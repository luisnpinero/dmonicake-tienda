@extends('layouts.main')

@section('title')
  {{$product->name}}
@endsection

@section('content')
  <!-- Page Content -->
  <div class="container mt-5">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">{{$product->name}}</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Comprar</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">{{$product->name}}</h3>
            <h4>{{$currency->find(1)->name}} {{$cost->find($product->cost_id)->cost}}</h4>
            <p class="card-text">{{ $product->description}}</p>
          </div>
          <div class="card-footer">
            @if ($product->stock < 1)
                    AGOTADO  
                  @else
                    Stock: {{$product->stock}}  
                  @endif  
          </div>
        </div>
        <!-- /.card -->
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
@endsection

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
