@extends('layout/app')

@section('content')
<div class="container bg-light">


    <!-- HEADER ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div class="row my-2">
        <div class="col-2 my-auto">
            <svg viewBox="0 0 16 16" class="bi bi-building w-100" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
            </svg>

        </div>
        <div class="col-4 my-auto">
            <h1>AnMa</h1>
            <p>Všetko pre Váš domáci výpočtový systém.</p>

        </div>
        <div class="col-4 my-auto">
            <form class="form-inline float-right">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success w-auto" type="submit">Hľadať</button>
                </form>
        </div>
        <div class="col-2 my-auto">
            <div class="float-right">
                <button class="btn btn-success">
                    <i class="fa fa-shopping-basket"></i>
                        Košík
                </button>
            </div>
        </div>
    </div>
    <!-- !HEADER ------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- NAVBAR ------------------------------------------------------------------------------------------------------------------------------------- !-->

    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Domov</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Nakupovať</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategórie
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Počítače</a>
                        <a class="dropdown-item" href="#">Notebooky</a>
                        <a class="dropdown-item" href="#">Príslušenstvo</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Popis</a>
                </li>
            </ul>
            <a class="navbar-brand" href="#">Informácie</a>
            <a class="navbar-brand"  href="#">
                Prihlásiť sa
            </a>
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-square text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
        </div>
    </nav>
    <!-- !NAVBAR ------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- CAROUSEL ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div id="carouselExampleCaptions1" class="carousel slide mt-2 mb-2" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.macrumors.com/t/u5qFUnuK3qopG8nIsOOX74kgtk8=/1600x0/article-new/2019/02/MR-Future-Products-2020-2.png" class="d-block w-100" alt="first slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.apple.com/newsroom/images/product/iphone/standard/Apple_announce-iphone12pro_10132020.jpg.landing-big_2x.jpg" class="d-block w-100" alt="second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://9to5mac.com/wp-content/uploads/sites/6/2020/01/2018-MacBook-Pro3.jpg?quality=82&strip=all" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- !CAROUSEL ------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- CAROUSEL PRODUCTS ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <h3>Produkty v zľave:</h3>
    <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col align-self-end">
                        <img class="w-100"
                                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4 ">
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4 ">
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
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
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4 ">
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
                        </div>
                    </div>

                    <div class="col align-self-end">
                        <img class="w-100"
                             src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">
                        <div class="text-center pt-4">
                            <h5>Fantasy T-shirt</h5>
                            <h6 class="mb-3">12.99 $</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- !CAROUSEL PRODUCTS ------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- CARDS ------------------------------------------------------------------------------------------------------------------------------------- !-->
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
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>
