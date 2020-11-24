@extends('layout/app')

@section('content')

<div class="row">

        <!--  BREADCRUMB------------------------------------------------------------------------------------------------------------------------------------- !-->
        <div class="col" id="main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domov</a></li>
                    <li class="breadcrumb-item"><a href="#">Počítače</a></li>
                </ol>
            </nav>

            <div class="jumbotron">
                <h1 class="">Počítače</h1>
                <hr class="">
                <p>U nás predávame len tie najkvalitnejšie produkty, ktoré boli otestované špecialistami a uisťujeme sa, aby čo najviac vyhovovali naším zákazníkom.</p>
                <a class="btn btn-primary" href="{{ route('shop-pc-gaming') }}" role="button">Herné PC</a>
                <a class="btn btn-primary ml-5" href="{{ route('shop-pc-office') }}" role="button">Kancelárske PC</a>
            </div>
        </div>
    </div>
    <!-- !BREADCRUMB------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!--  SORTING------------------------------------------------------------------------------------------------------------------------------------- !-->
    <section>
        <div class="row">
            <div class="col text-center">
                <a href="#" class="text-reset float-left"><i class="fa fa-th-list fa-lg mr-1" data-toggle="collapse" data-target="#sidebar2" aria-hidden="true" aria-expanded="false" aria-controls="sidebar" onclick="var that = this; setTimeout(function() {that.parentNode.style.flex = 'auto';that.parentNode.style['max-width'] = 'none';}, 2000);">Filtrovať</i></a>
                <label class="float-right">
                    <label>Zoradiť podľa</label>
                    <select class="mdb-select md-outline md-form" searchable="Search here..">
                        <option value="1">Najdrahšie</option>
                        <option value="2">Najlacnejšie</option>
                    </select>
                    <button class="btn btn-primary">Zobraziť</button>
                </label>
            </div>

        </div>
    </section>
    <!--  !SORTING------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- FILTER------------------------------------------------------------------------------------------------------------------------------------- !-->

    <div class="container position-absolute" style="z-index: 1;">
        <div class="row">
            <nav class="col-6 bg-secondary collapse text-white" id="sidebar2">
                <section>
                    <section>
                        <section class="">

                            <h6 class="font-weight-bold">Stav produktu</h6>

                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="new">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="new">Všetko</label>
                            </div>
                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="used">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="used">Nové</label>
                            </div>
                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="collectible">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Použité</label>
                            </div>
                        </section>

                        <section class="">

                            <h6 class="font-weight-bold">Značka</h6>
                            <select class="mdb-select md-outline md-form w-50" searchable="Search here..">
                                <option value="1">Asus</option>
                                <option value="2">Apple</option>
                                <option value="3">Asus</option>
                                <option value="4">Apple</option>
                                <option value="5">Asus</option>
                                <option value="6">Apple</option>
                            </select>

                        </section>

                        <section class="">
                            <h6 class="font-weight-bold mt-3">Cena</h6>
                            <form>
                                <div class="">
                                    <div class="md-form">
                                        <label for="from">Od:</label>
                                        <input id="from" type="text" class="form-control mb-0">
                                    </div>
                                    <div class="md-form md-outline my-0">
                                        <label for="to">Do:</label>
                                        <input id="to" type="text" class="form-control mb-0">
                                    </div>
                                </div>
                            </form>
                        </section>

                        <button class="btn btn-primary mb-4 mt-4">Použiť</button>

                    </section>
                </section>
            </nav>

            <div class="col-6 bg-dark">

            </div>
        </div>
    </div>
    <!-- !FILTER------------------------------------------------------------------------------------------------------------------------------------- !-->

    <div class="row">
    @foreach($products as $product)
        @foreach($product->categories as $category)

        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <img class="img-fluid w-100"
                 src="{{$product->image}}" alt="Obrazok">

            <!--<h4 class="mb-0"><span class="badge badge-dark badge-pill badge-news">Sold out</span></h4> !-->

            <div class="text-center">
                <h5>{{$product->name}}</h5>
                <p class="mb-2 text-muted text-uppercase small">{{$category->name}}</p>
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
    @endforeach


    <!-- PAGINATION ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center my-4">
                <li class="page-item">
                  {{ $products->onEachSide(5)->links() }}
                </li>
            </ul>
        </nav>
    </div>

@endsection
