@extends('layout/app')

@section('content')

<div class="row">

        <!--  BREADCRUMB------------------------------------------------------------------------------------------------------------------------------------- !-->
        <div class="col" id="main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domov</a></li>
                    <li class="breadcrumb-item"><a href="#">Výsledky hľadania</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- !BREADCRUMB------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!--  SORTING------------------------------------------------------------------------------------------------------------------------------------- !-->
    <!--  !SORTING------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- FILTER------------------------------------------------------------------------------------------------------------------------------------- !-->


    <!-- !FILTER------------------------------------------------------------------------------------------------------------------------------------- !-->

    <div class="row">
    @foreach($products as $product)

        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <img class="img-fluid w-100"
                 src="{{$product->image}}" alt="Obrazok">

            <!--<h4 class="mb-0"><span class="badge badge-dark badge-pill badge-news">Sold out</span></h4> !-->

            <div class="text-center">
                <h5>{{$product->name}}</h5>
                <p class="mb-2 text-muted text-uppercase small">{{$product->category_id}}</p>
                <p>
                    {{$product->description}}
                </p>
                <hr>
                <h6 class="mb-3">{{$product->price}} €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2" onclick="window.location='{{ route('cart-addshow', $product) }}'">
                <i class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2" onclick="window.location='{{ route('product-detail', $product) }}'"><i
                            class="fa fa-info-circle pr-2"></i>Detail</button>
                </div>
        </div>
    @endforeach


    <!-- PAGINATION ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div class="mx-auto">
             {{ $products->onEachSide(5)->links() }}
    </div>

@endsection
