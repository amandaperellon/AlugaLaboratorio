<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alocação de laboratório </title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/heroic-features.css')}}" rel="stylesheet">

   <!-- Font Icon -->
   <link rel="stylesheet" href="{{asset('app-assets/res/site/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{asset('app-assets/res/site/css/style.css')}}">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/alocacao">Alocação de laboratorio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/alocacao">Início
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/usuario/login">Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/alocacao">Alocar um Laboratório </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <br>

    @yield('conteudo')
    <br>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('app-assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('app-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
