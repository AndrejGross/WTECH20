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
                        <img src="https://images.macrumors.com/t/u5qFUnuK3qopG8nIsOOX74kgtk8=/1600x0/article-new/2019/02/MR-Future-Products-2020-2.png" class="d-block w-100" alt="first slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.apple.com/newsroom/images/product/iphone/standard/Apple_announce-iphone12pro_10132020.jpg.landing-big_2x.jpg" class="d-block w-100" alt="second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://9to5mac.com/wp-content/uploads/sites/6/2020/01/2018-MacBook-Pro3.jpg?quality=82&strip=all" class="d-block w-100" alt="Third slide">
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
            <p>
                <strong>Logitech MX Keys SR - black</strong>
            </p>
            <p>
                99,00 €
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit error voluptas repellat
                rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio, officia quis dolore quos sapiente
                tempore alias.
            </p>

            <div class="table-responsive">
                <table class="table table-sm table-borderless mb-0">
                    <tbody>
                    <tr>
                        <th class="pl-0 w-25" scope="row"><strong>Kategória</strong></th>
                        <td>Klávesnice</td>
                    </tr>
                    <tr>
                        <th class="pl-0 w-25" scope="row"><strong>Typ</strong></th>
                        <td>Herné</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>

            <div class="table-responsive mb-2">
                <table class="table table-sm table-borderless">
                    <tbody>
                    <tr>
                        <td class="pl-0 pb-0 w-25">Množstvo</td>
                    </tr>
                    <tr>
                        <td class="pl-0">
                            <div class="def-number-input number-input safari_only mb-0">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        class="minus fa fa-minus"></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        class="plus fa fa-plus"></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <button type="button" class="btn btn-primary btn-md">Buy now</button>
            <button type="button" class="btn btn-light btn-md"><i
                    class="fa fa-shopping-cart pr-2"></i>Add to cart</button>
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
                    <p class="small text-muted text-uppercase mb-2">Počítače</p>
                    <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
                        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
                        officia quis dolore quos sapiente tempore alias.</p>
                    <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
                        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
                        officia quis dolore quos sapiente tempore alias.</p>
                </div>

                <div class="tab-pane fade" id="parametre" role="tabpanel" aria-labelledby="parametre-tab">
                    <h5>Parametre produktu</h5>
                    <table class="table table-striped table-bordered mt-3">
                        <thead>
                        <tr>
                            <th scope="row" class="w-150 dark-grey-text h6">Váha</th>
                            <td><em>0.3 kg</em></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="w-150 dark-grey-text h6">Rozmery</th>
                            <td><em>50 × 60 x 20 cm</em></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- Classic tabs -->
    </div>

@endsection