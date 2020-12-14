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

<h2>Moje objednávky</h2>

<div>


    <div class="">

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID objednávky</th>
              <th scope="col">Payment</th>
              <th scope="col">Shipment</th>
              <th scope="col">Vytvorená</th>
              <th scope="col">Celková suma (v €)</th>
              <th scope="col">Stav</th>
            </tr>
          </thead>
          <tbody>

          @foreach ($orders as $order)
            <tr>
              <th>{{$order->id}}</th>
              <td>{{$order->payment}}</td>
              <td>{{$order->shipment}}</td>
              <td>{{$order->created_at}}</td>
              <td>{{$order->billing_total}}</td>
              <td>{{$order->state}}</td>

            </tr>

          @endforeach

          </tbody>
        </table>

    </div>




@endsection
