<!DOCTYPE html >
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>MutuoLibrary</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- Scripts -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Scripts -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/loans">
                    <img src="/mutuo.png" alt="Mutuo" height="35" width="35">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                      <li><a href="{{ url('/loan') }}">Inicio</a></li>
                    @else
                        <li>
                        <li><a href="{{ url('/loans') }}">Prestamos</a></li>
                        <li><a href="{{ url('/books') }}">Libros</a></li>
                        <li><a href="{{ url('/author') }}">Autores</a></li>
                        <li><a href="{{ url('/library') }}">Biblioteca</a></li>
                        <li><a href="{{ url('/return') }}">Regresar libro</a></li>
                        <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if (Session::has('status'))
        <div class="alert alert-{{ Session('status') }} " role="alert">{{ Session('msj') }}</div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <p>Ha habido algunos errores, por favor verifique su información</p>
            <p>
            @foreach ($errors->all() as $error)
                - {{ $error }}<br />
            @endforeach
            </p>
        </div>
    @endif

	<!-- load local js scripts -->
	@yield('scripts')

  @yield('content')

    <!-- Scripts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
