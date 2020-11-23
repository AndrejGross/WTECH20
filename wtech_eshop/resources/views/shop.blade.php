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
                        <li class="active">
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

        <div class="col" id="main">
            <div class="jumbotron">
                <h1 class="">AnMa, prečo u nás nakupovať ?</h1>
                <p class="lead">AnMa je rodinný podnik ktorý má tisíce spokojných zákazníkov po celej Európe. Staňte sa aj vy jeden zo šťastlivých zákazníkov a vyberte si produkty ktoré uľahodia Vášmu srdcu.</p>
                <hr class="my-4">
                <p>U nás predávame len tie najkvalitnejšie produkty, ktoré boli otestované špecialistami a uisťujeme sa, aby čo najviac vyhovovali naším zákazníkom.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Viac info</a>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="media col-md-4">
                <img src="http://www.pngmart.com/files/4/Gaming-Computer-Transparent-PNG.png" class="align-self-center mr-3 w-100" alt="...">
            </div>
                <div class="media-body col-md-8">
                    <h5 class="mt-0">Nadpis 1</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        <hr>
    </div>

    <div class="row">
        <div class="media-body col-md-8">
            <h5 class="mt-0">Nadpis 2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="media col-md-4">
            <img src="http://www.pngmart.com/files/4/Gaming-Computer-Transparent-PNG.png" class="align-self-center mr-3 w-100" alt="...">
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="media col-md-4">
            <img src="http://www.pngmart.com/files/4/Gaming-Computer-Transparent-PNG.png" class="align-self-center mr-3 w-100" alt="...">
        </div>
        <div class="media-body col-md-8">
            <h5 class="mt-0">Nadpis 3</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <hr>
    </div>

@endsection