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
                        <?php $total = 0 ?>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity'] ?>
                                <div class="row mb-4">
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
                                                                        <div class="def-number-input number-input safari_only mb-0">
                                                                            <button onclick="window.location='{{ route('updateP', $details['id']) }}'"
                                                                                    class="plus fa fa-plus"></button>
                                                                            <input class="quantity" min="0" name="quantity" value="{{ $details['quantity'] }}" type="number">
                                                                            <button onclick="window.location='{{ route('updateM', $details['id']) }}'"
                                                                                    class="minus fa fa-minus"></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="cart-table-actions">
                                                    <form action="{{ route('cart-delete', $id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        <button type="submit" class="card-link-secondary small text-uppercase mr-3"><i
                                                                   class="fa fa-trash"></i> Odstráň produkt</button>
                                                    </form>
                                                </div>
                                                <p class="mb-0"><span><strong id="summary">{{ $details['price'] }} €</strong></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-4">

                        @endforeach
                        @endif


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

                        <button type="button" onclick="window.location='{{ route('cart_2') }}'" class="btn btn-primary btn-block">Pokračovať k objednávke</button>

                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
