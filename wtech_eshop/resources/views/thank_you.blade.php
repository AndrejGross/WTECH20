@extends('layout/app')

@section('content')

<div class="jumbotron text-center">
    <h1 class="display-3">Ďakujeme!</h1>
    <p class="lead"><strong>Vaša objednávka bola úspešne spracovaná</strong> a bližšie informácie o objednávke boli poslané na Vašu emailovú adresu.</p>
    <hr>
    <p>
    Máte nejaké otázky? <a href="to_asi_nič">Kontaktujte nás</a>
    </p>
    <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{ route('home') }}" role="button">Pokračovať na domovskú obrazovku</a>
    </p>
</div>

@endsection
