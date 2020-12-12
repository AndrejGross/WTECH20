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
                        <section>

                            <h5 class="font-weight-bold">Zvoľte spôsob dopravy a platby</h5>

                            <form method="GET" action="{{ route('cart-faze-2') }}">
                               @csrf

                                <section>
                                    <h6 class="font-weight-bold mt-3">Spôsob dopravy</h6>
                                    <select class="mdb-select md-outline md-form w-50" searchable="Search here.." name="shipment">
                                        <option value="osobne_vyzdvihnutie">Vyzdvihnutie v predajni</option>
                                        <option value="zasielkovna">Zásielkovňa</option>
                                        <option value="kurier">Kuriérska služba</option>
                                    </select>
                                </section>

                                <section class="mb-4">
                                    <h6 class="font-weight-bold mt-3">Spôsob platby</h6>
                                    <select class="mdb-select md-outline md-form w-50" searchable="Search here.." name="payment">
                                        <option value="bankovy_prevod">Bankový prevod</option>
                                        <option value="platba_kartou">Platba kartou</option>
                                        <option value="dobierka">Dobierka</option>
                                        <option value="paypal">Paypal</option>
                                    </select>
                                </section>


                        </section>
                    </section>
                </section>
            </div>
            <?php $total = 0 ?>
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                @endforeach
            @endif
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

                        <button type="submit" onclick="window.location='{{ route('cart_2') }}'" class="btn btn-primary btn-block">Pokračovať k objednávke</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
