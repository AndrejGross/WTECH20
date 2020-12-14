@extends('layout/app')

@section('content')

<div id="home_page_carousel" class="carousel slide mt-2 mb-2" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home_page_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home_page_carousel" data-slide-to="1"></li>
            <li data-target="#home_page_carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.macrumors.com/t/u5qFUnuK3qopG8nIsOOX74kgtk8=/1600x0/article-new/2019/02/MR-Future-Products-2020-2.png" class="d-block w-100" alt="first slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Prvý slide názov</h5>
                    <p>Popis prvého slide v carousel</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.apple.com/newsroom/images/product/iphone/standard/Apple_announce-iphone12pro_10132020.jpg.landing-big_2x.jpg" class="d-block w-100" alt="second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Druhý slide názov</h5>
                    <p>Popis druhého slide v carousel</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://9to5mac.com/wp-content/uploads/sites/6/2020/01/2018-MacBook-Pro3.jpg?quality=82&strip=all" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tretí slide názov</h5>
                    <p>Popis tretieho slide v carousel</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#home_page_carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home_page_carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h3>Produkty v zľave:</h3>
    <div id="carousel_products_sale" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col align-self-end">
                        <img class="w-100"
                                 src="https://www.mall.cz/i/39176092/550/550" alt="Sample">
                        <div class="text-center pt-4 ">
                            <h5>Produkt v zľave 1</h5>
                            <h6 class="mb-3">12,99 €</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp-spacegray-select-202011?wid=892&hei=820&&qlt=80&.v=1603406905000" alt="Sample">
                        <div class="text-center pt-4 ">
                            <h5>Produkt v zľave 2</h5>
                            <h6 class="mb-3">12,99 €</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://www.mzone.sk/images/products/airpods-5-gallery.jpg" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Produkt v zľave 3</h5>
                            <h6 class="mb-3">1299 €</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Produkt v zľave 4</h5>
                            <h6 class="mb-3">12,99 €</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4 ">
                            <h5>Produkt v zľave 5</h5>
                            <h6 class="mb-3">12,99 €</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://www.mall.cz/i/39176092/550/550" alt="Sample">
                        <div class="text-center pt-4 ">
                            <h5>Produkt v zľave 6</h5>
                            <h6 class="mb-3">12,99 €</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://www.mzone.sk/images/products/airpods-5-gallery.jpg" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Produkt v zľave 7</h5>
                             <h6 class="mb-3">12,99 €</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp-spacegray-select-202011?wid=892&hei=820&&qlt=80&.v=1603406905000" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Produkt v zľave 8</h5>
                            <h6 class="mb-3">12,99 €</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#carousel_products_sale" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel_products_sale" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    TOP produkty
                </div>
                <div class="w-50 d-block m-auto">
                <svg  viewBox="0 0 16 16" class="bi bi-star-fill align-self-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum, Lorem ipsum</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    Akciové produkty
                </div>
                <div class="w-50 d-block m-auto">
                <svg  viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum, Lorem ipsum</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    Výpredaj !
                </div>
                <div class="w-50 d-block m-auto">
                <svg viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum, Lorem ipsum</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

</div>

@endsection