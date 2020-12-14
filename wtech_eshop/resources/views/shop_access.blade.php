@extends('layout/app')

@section('content')

<div class="row">

        <!--  BREADCRUMB------------------------------------------------------------------------------------------------------------------------------------- !-->
        <div class="col" id="main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domov</a></li>
                    <li class="breadcrumb-item"><a href="#">Príslušenstvo</a></li>
                </ol>
            </nav>

            <div class="jumbotron">
                <h1 class="">Príslušenstvo</h1>
                <hr class="">
                <p>U nás predávame len tie najkvalitnejšie produkty, ktoré boli otestované špecialistami a uisťujeme sa, aby čo najviac vyhovovali naším zákazníkom.</p>
                <a class="btn btn-primary" href="{{ route('shop-access-gaming', $id) }}" role="button">Herné príslušenstvo</a>
                <a class="btn btn-primary ml-5" href="{{ route('shop-access-office', $id) }}" role="button">Kancelárske príslušenstvo</a>
            </div>
        </div>
    </div>
    <!-- !BREADCRUMB------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!--  SORTING------------------------------------------------------------------------------------------------------------------------------------- !-->
        <section>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="text-reset float-left"><i class="fa fa-th-list fa-lg mr-1" data-toggle="collapse" data-target="#sidebar" aria-hidden="true" aria-expanded="false" aria-controls="sidebar" onclick="var that = this; setTimeout(function() {that.parentNode.style.flex = 'auto';that.parentNode.style['max-width'] = 'none';}, 2000);">Kategórie</i></a>
                    <label class="float-right">
                        <label>Zoradiť podľa</label>
                        <button class="btn btn-primary" onclick="window.location='{{ route('shop', [$id, 'sort' => 'high_low']) }}'" >Najdrahšie</button>
                        <button class="btn btn-primary" onclick="window.location='{{ route('shop', [$id, 'sort' => 'low_high']) }}'" >Najlacnejšie</button>
                    </label>
                </div>

            </div>
        </section>
        <!--  !SORTING------------------------------------------------------------------------------------------------------------------------------------- !-->

        <!-- FILTER------------------------------------------------------------------------------------------------------------------------------------- !-->
        <div class="container position-absolute" style="z-index: 1;">
                <div class="row">
                    <nav class="col-6 bg-secondary collapse" id="sidebar">
                            <section>
                                <h5>Filtrovať</h5>

                                <form method="GET" action="{{ route('shop', $id)}}">
                                    @csrf
                                    <section class="">

                                        <h6 class="font-weight-bold">Značka</h6>
                                        <select class="mdb-select md-outline md-form w-50" searchable="Search here.." name="brand">
                                            <option value="Asus">Asus</option>
                                            <option value="Razer">Razer</option>
                                        </select>

                                    </section>

                                    <section class="mb-4">
                                        <h6 class="font-weight-bold">Cena</h6>

                                            <div class="">
                                                <div class="md-form">
                                                    <label for="from">Od:</label>
                                                    <input id="from" type="text" class="form-control mb-0" name="price_from">
                                                </div>
                                                <div class="md-form md-outline my-0">
                                                    <label for="to">Do:</label>
                                                    <input id="to" type="text" class="form-control mb-0" name="price_to">
                                                </div>
                                            </div>

                                    </section>

                                    <button type="submit" class="btn btn-primary mb-4">Použiť</button>

                                </form>
                            </section>
                    </nav>

                    <div class="col-6 bg-dark">

                    </div>
                </div>
            </div>

        <!-- !FILTER------------------------------------------------------------------------------------------------------------------------------------- !-->

    <div class="row">
    @foreach($products as $product)

        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <img class="img-fluid w-100"
                 src="{{$product->image}}" alt="Obrazok">

            <!--<h4 class="mb-0"><span class="badge badge-dark badge-pill badge-news">Sold out</span></h4> !-->

            <div class="text-center">
                <h5>{{$product->name}}</h5>
                <p class="mb-2 text-muted text-uppercase small">{{$category}}</p>
                <p>
                    {{$product->description}}
                </p>
                <hr>
                <h6 class="mb-3">{{$product->price}} €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2" onclick="window.location='{{ route('cart-add', $product) }}'">
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
