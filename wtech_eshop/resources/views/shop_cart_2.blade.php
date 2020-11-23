@extends('layout/app')

@section('content')

<nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item" aria-current="page">Košík</li>
            <li class="breadcrumb-item active">Doprava a platba</li>
            <li class="breadcrumb-item">Dodacie údaje</li>
        </ol>
    </nav>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------- !-->
    <section>
        <div class="row">

            <div class="col-lg-8">
                <section>
                    <section>
                        <section class="">

                            <h5 class="font-weight-bold">Zvoľte spôsob dopravy</h5>

                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="">Osobné vyzdvihnutie na centrále</label>
                            </div>
                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="">Kuriérom DPD</label>
                            </div>
                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="">Kuriéom UPS</label>
                            </div>
                        </section>

                        <section class="mb-4">
                            <h6 class="font-weight-bold">Zvoľte spôsob platby</h6>
                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="">Bankovým prevodom</label>
                            </div>
                            <div class="form-check pl-0 mb-3 ml-4">
                                <input type="checkbox" class="form-check-input filled-in" id="">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="">Online platba kartou</label>
                            </div>
                        </section>

                        <button class="btn btn-primary mb-4">Pokračovať v objednávke</button>

                    </section>
                </section>
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
                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection