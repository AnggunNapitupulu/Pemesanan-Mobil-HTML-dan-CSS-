<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <title>Bro Mobil</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    
    </head>
    
    @yield('content')
    
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
  </body>
</html>