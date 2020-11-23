@extends('layout/app')

@section('content')

<nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item active" aria-current="page">Košík</li>
            <li class="breadcrumb-item">Doprava a platba</li>
            <li class="breadcrumb-item">Dodacie údaje</li>
        </ol>
    </nav>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <!--Section: Block Content-->
    <section>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-8">

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4">

                        <h5 class="mb-4">Košík</h5>

                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="">
                                    <img class="img-fluid w-100"
                                         src="http://www.pngmart.com/files/4/Gaming-Computer-Transparent-PNG.png" alt="Sample">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>Asus Zen-120</h5>
                                            <p class="mb-3 text-muted text-uppercase small">Počítač</p>
                                            <p class="mb-2 text-muted text-uppercase small">Herný</p>
                                            <p class="mb-3 text-muted text-uppercase small">Popis popis Popis popis Popis popis Popis popis</p>
                                        </div>
                                        <div>
                                            <div class="mb-0 w-100">
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                (Note, 1 piece)
                                            </small>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="#" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fa fa-trash"></i> Remove item </a>
                                        </div>
                                        <p class="mb-0"><span><strong id="summary">17,99 €</strong></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">

                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="">
                                    <img class="img-fluid w-100"
                                         src="http://www.pngmart.com/files/4/Gaming-Computer-Transparent-PNG.png" alt="Sample">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>Asus Zen-120</h5>
                                            <p class="mb-3 text-muted text-uppercase small">Počítač</p>
                                            <p class="mb-2 text-muted text-uppercase small">Herný</p>
                                            <p class="mb-3 text-muted text-uppercase small">Popis popis Popis popis Popis popis Popis popis</p>
                                        </div>
                                        <div>
                                            <div class="mb-0 w-100">
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                (Note, 1 piece)
                                            </small>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="#" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fa fa-trash"></i> Remove item </a>
                                        </div>
                                        <p class="mb-0"><span><strong id="summary">17,99 €</strong></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">

                        <p class="text-primary mb-0"><i class="fa fa-info-circle mr-1"></i> Do not delay the purchase, adding
                            items to your cart does not mean booking them.</p>

                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="mb-3">
                    <div class="pt-4">

                        <h5 class="mb-3">Zhodnotenie</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 pb-0">
                                Celková suma (bez DPH)
                                <span>25,00 €</span>
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
                                <span><strong>53,98 €</strong></span>
                            </li>
                        </ul>

                        <button type="button" class="btn btn-primary btn-block">Pokračovať k objednávke</button>

                    </div>
                </div>

                <div class="mb-3">
                    <div class="pt-4">

                        <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                           aria-expanded="false" aria-controls="collapseExample">
                            Add a discount code (optional)
                            <span><i class="fa fa-chevron-down pt-1"></i></span>
                        </a>

                        <div class="collapse" id="collapseExample">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code" class="form-control font-weight-light"
                                           placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection