<head>
  <meta charset="utf-8">
  <title>Venta Online De Carros</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">VENDE CARROS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="{{action('CarroController@index')}}">CARROS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{action('VentasController@index')}}">Ventas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{action('CarroController@create')}}">AgregarCarro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{action('VentasController@create')}}">AgregarVenta</a>
      </li>

      @if (Auth::guest())
      <li class="nav-item">
          <a class="nav-link" href="{{action('CarroController@index')}}">login</a>
      </li>
      @else
      <li class="nav-item">
          <a class="nav-link" href="{{action('HomeController@index')}}">LogOut</a>
      </li>
      @endif

    </ul>


</nav>

<div class="container">
  <section id="content" class="main">
    <br>
<br>
