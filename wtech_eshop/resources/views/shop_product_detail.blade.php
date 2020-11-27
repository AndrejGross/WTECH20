@extends('layout/app')

@section('content')

<!-- BREADCRUMPS------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domov</a></li>
                    <li class="breadcrumb-item"><a href="#">Počítače</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- !BREADCRUMPS------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- PRODUCT DETAIL------------------------------------------------------------------------------------------------------------------------------------- !-->


    <div class="row">
        <div class="col-md-6">
            <div id="product_carousel" class="carousel slide mt-2 mb-2" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ $product->image }}" class="d-block w-100" alt="first slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $product->image }}" class="d-block w-100" alt="second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $product->image }}" class="d-block w-100" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product_carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#product_carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <div class="col-md-6">
            <p style="font-size: 28px">
                <strong>{{ $product->name }}</strong>
            </p>
            <p>
                {{ $product->brand }}
            </p>
            <p style="font-size: 48px">
                {{ $product->price }} €
            </p>

            <p>
                {{ $product->description }}
            </p>


            <div class="table-responsive">
                <table class="table table-sm table-borderless mb-0">
                    <tbody>
                    <tr>
                        <th class="pl-0 w-25" scope="row"><strong>Typ</strong></th>
                        <td>{{ $product->type }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>
             <div class="table-responsive mb-2">

                <button type="button" class="btn w-100 btn-primary btn-md" onclick="window.location='{{ route('cart-addshow', $product) }}'">Kúpiť</button>
                                <button type="button" class="btn w-50 btn-light btn-md" onclick="window.location='{{ route('cart-add', $product) }}'"><i
                                                                class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
            </div>

        </div>
    </div>

    <!-- !PRODUCT DETAIL cards------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div class="row">
        <!-- Classic tabs -->
        <div class="classic-tabs border rounded px-4 pt-1 col-12">

            <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="popis-tab" data-toggle="tab" href="#popis" role="tab" aria-controls="popis_content" aria-selected="true">Popis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="parametre-tab" data-toggle="tab" href="#parametre" role="tab" aria-controls="parametre_content" aria-selected="false">Parametre</a>
                </li>
            </ul>

            <div class="tab-content" id="popis_content">

                <div class="tab-pane fade show active" id="popis" role="tabpanel" aria-labelledby="popis-tab">
                    <h5>Popis produktu</h5>
                    <p class="pt-1">{{ $product->description }}</p>
                </div>

                <div class="tab-pane fade" id="parametre" role="tabpanel" aria-labelledby="parametre-tab">
                    <h5>Parametre produktu</h5>
                    <table class="table table-striped table-bordered mt-3">
                        <thead>
                        <tr>
                            <td><em>{{ $product->details }}</em></td>
                        </tr>
                        </thead>
                    </table>
                </div>

            </div>

        </div>
        <!-- Classic tabs -->
    </div>

@endsection
