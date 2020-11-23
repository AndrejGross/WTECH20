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

    <div class="row">

        <div class="col-lg-4 order-md-2">

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
        <div class="col-md-8 order-md-1">
            <div class="alert alert-primary" role="alert">
                Pre urýchlenie objednávky sa môžete prihlásiť <a href="">tu</a>.
            </div>
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Dokončiť</button>
                <p>By clicking
                    <em>Dokončiť</em> you agree to our
                    <a href="" target="_blank">terms of service</a>
                </p>
            </form>
        </div>
    </div>

@endsection