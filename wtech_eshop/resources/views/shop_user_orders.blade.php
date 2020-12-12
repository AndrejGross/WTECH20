@extends('layout/app')

@section('content')

<div class="col" id="main">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Domov</a></li>
            <li class="breadcrumb-item"><a href="#">Moje objednávky</a></li>
        </ol>
    </nav>
</div>

<h1>Moje objednávky</h1>

<div>

    <--! sem foreach -->
    <div class="col-lg-8">

    <h3>Objednávka id</h3>

        <div class="col-md-5 col-lg-3 col-xl-3">
            <div class="">
                <img class="img-fluid w-100"
                     src="{{ $details['image'] }}" alt="Obrázok">
            </div>
        </div>
        <div class="col-md-7 col-lg-9 col-xl-9">
            <div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>{{ $details['name'] }}</h5>
                        <p>
                            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        </p>
                    </div>
                    <div>
                        <div class="mb-0 w-100">
                            <div class="table-responsive mb-2">
                                <table class="table table-sm table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="pl-0 pb-0 w-25">Množstvo</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-0">
                                                <input class="quantity" min="0" name="quantity" value="{{ $details['quantity'] }}" type="number">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0"><span><strong id="summary">{{ $details['price'] }} €</strong></span></p>
                </div>
            </div>
        </div>
        </div>

        <hr class="mb-4">

        <div class="col-lg-4">

            <div class="mb-3">
                <div class="pt-4">

                    <h5 class="mb-3">Zhodnotenie</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 pb-0">
                            Celková suma (bez DPH)
                            <span>{{ $total * 0.8 }} €</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Doprava
                            <span>Zadarmo</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <strong>Celklová suma</strong>
                                <strong>
                                    <p class="mb-0">(s DPH)</p>
                                </strong>
                            </div>
                            <span><strong>{{ $total }} €</strong></span>
                        </li>
                    </ul>

                    <button type="button" class="btn btn-primary btn-block">Pokračovať k objednávke</button>

                </div>
            </div>

        </div>

    </div>




@endsection
