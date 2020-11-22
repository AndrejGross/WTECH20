<!doctype html>
<html lang="sk">
<head>
    @include('layout.partials.head')
</head>

<body>

//CONTAINER
<div class="container bg-light">

    // HEADER
    @include('layout.partials.header')

    // NAVBAR
    @include('layout.partials.nav')

    // CONTENT
    @yield('content')

    //FOOTER
    @include('layout.partials.footer')

// END CONTAINER
</div>

//BOOTSTRAP JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
