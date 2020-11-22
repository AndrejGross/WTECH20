@extends('layout/app')

@section('content')

<div class="row">

        <div class="col-md-2 col-sm-12" id="sticky-sidebar">

            <nav class="" id="">
                <div class="" id="sidebar">
                    <p>Kategórie</p>
                    <ul class="list-unstyled">
                        <li class="active">
                            <a href="#PCmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Počítače</a>
                            <ul class="collapse" id="PCmenu">
                                <li>
                                    <a href="#">Kancelárske</a>
                                </li>
                                <li>
                                    <a href="#">Herné</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#NTBmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Netebooky</a>
                            <ul class="collapse" id="NTBmenu">
                                <li>
                                    <a href="#">Kancelárske</a>
                                </li>
                                <li>
                                    <a href="#">Herné</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#PRmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Príslušenstvo</a>
                            <ul class="collapse" id="PRmenu">
                                <li>
                                    <a href="#">Monitory</a>
                                </li>
                                <li>
                                    <a href="#">Klávesnice</a>
                                </li>
                                <li>
                                    <a href="#">Myšky</a>
                                </li>
                                <li>
                                    <a href="#">Sluchadlá</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- !SIDEBAR ------------------------------------------------------------------------------------------------------------------------------------- !-->

        <!--  BREADCRUMB------------------------------------------------------------------------------------------------------------------------------------- !-->
        <div class="col" id="main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domov</a></li>
                    <li class="breadcrumb-item"><a href="#">Počítače</a></li>
                    <li class="breadcrumb-item"><a href="#">Herné</a></li>
                </ol>
            </nav>

            <div class="jumbotron">
                <h1 class="">Herné počítače</h1>
                <hr class="">
                <p>U nás predávame len tie najkvalitnejšie produkty, ktoré boli otestované špecialistami a uisťujeme sa, aby čo najviac vyhovovali naším zákazníkom.</p>
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
                    <select class="mdb-select md-outline md-form" searchable="Search here..">
                        <option value="" disabled selected>Najpredávanejšie</option>
                        <option value="1">TOP</option>
                        <option value="2">Najpredávanejśie</option>
                        <option value="3">Najdrahšie</option>
                        <option value="4">Najlacnejšie</option>
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
            <nav class="col-6 bg-secondary collapse" id="sidebar">
                <section>
                    <section>
                        <h5>Filtrovať</h5>
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

                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="gaming">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="gaming">Herné</label>
                            </div>
                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="office">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="office">Kancelárske</label>
                            </div>
                        </section>

                        <section class="mb-4">
                            <h6 class="font-weight-bold">Cena</h6>
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

                        <button class="btn btn-primary mb-4">Použiť</button>

                    </section>
                </section>
            </nav>

            <div class="col-6 bg-dark">

            </div>
        </div>
    </div>
    <!-- !FILTER------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- PRODUCTS 1------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div class="row">

        <div class="col-md-3 col-sm-6 col-12">
            <img class="img-fluid w-100"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <!--<h4 class="mb-0"><span class="badge badge-dark badge-pill badge-news">Sold out</span></h4> !-->

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">

            <img class="img-fluid"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">

            <img class="img-fluid"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">

            <img class="img-fluid"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

    </div>
    <!-- !PRODUCTS 1------------------------------------------------------------------------------------------------------------------------------------- !-->

    <!-- PRODUCTS 2 ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <div class="row">

        <div class="col-md-3 col-sm-6 col-12">
            <img class="img-fluid w-100"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <!--<h4 class="mb-0"><span class="badge badge-dark badge-pill badge-news">Sold out</span></h4> !-->

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">

            <img class="img-fluid"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">

            <img class="img-fluid"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">

            <img class="img-fluid"
                 src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png" alt="Sample">

            <div class="text-center">
                <h5>Asus Z-120 </h5>
                <p class="mb-2 text-muted text-uppercase small">Počítače</p>
                <p>
                    Z-120 je najmodernejší herný počítač z dieľne Asus - Republic of Gamers. Jeho grafický karta dosahuje
                    výkon až taký, že ma jebne...
                </p>
                <hr>
                <h6 class="mb-3">12,99 €</h6>
                <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                        class="fa fa-shopping-cart pr-2"></i>Pridať do košíka</button>
                <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fa fa-info-circle pr-2"></i>Details</button>
            </div>
        </div>

    </div>

    <!-- PAGINATION ------------------------------------------------------------------------------------------------------------------------------------- !-->

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center my-4">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

@endsection