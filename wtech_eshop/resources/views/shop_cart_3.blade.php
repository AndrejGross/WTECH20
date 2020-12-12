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

        <?php $total = 0 ?>
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                @endforeach
            @endif
            <div class="col-lg-4">

                <div class="mb-3">
                    <div class="pt-4">
                    <form method="GET" action="{{ route('order_checkout') }}">
                                    @csrf
                        <h5 class="mb-3">Zhodnotenie</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Spôsob dopravy
                                <p name="order_shipment" value="{{ $shipment }}">{{ $shipment }}</p>
                                <input type="text" style="display:none" name="order_shipment" value="{{ $shipment }}">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Spôsob platby
                                <span>{{ $payment }}</span>
                                <input type="text" style="display:none" name="order_payment" value="{{ $payment }}">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 pb-0">
                                Celková suma (bez DPH)
                                <span>{{ $total * 0.8 }} €</span>
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
                    </div>
                </div>

            </div>

        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Dodacie údaje</h4>

                <div class="mb-3">
                    <div class="">
                        <label for="name">Meno objednávateľa</label>
                        <input type="text" class="form-control" id="name" name="order_name" placeholder="{{ auth()->user()->name }}" value="{{ auth()->user()->name }}">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="order_email" placeholder="{{ auth()->user()->email }}" value="{{ auth()->user()->email }}">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>
                 <div class="mb-3">
                    <label for="phone">Telefónne číslo</label>
                    <input type="tel" class="form-control" id="phone" name="order_phone" placeholder="+421950851599" value="">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Adresa</label>
                    <input type="text" class="form-control" id="address" name="order_address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="city">Mesto</label>
                        <input type="text" class="form-control" id="city" name="order_city" placeholder="Topoľčany" required>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="order_postal" placeholder="95501" required>
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
