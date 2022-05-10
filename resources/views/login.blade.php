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
  <link href="{{asset('app-assets/css/heroic-features.css')}}" rel="stylesheet">

   <!-- Font Icon -->
   <link rel="stylesheet" href="{{asset('app-assets/res/site/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{asset('app-assets/res/site/css/style.css')}}">

</head>

<body>
<div class="container">
    <div class="signin-content">
        <div class="signin-image">
            <figure><img src="{{asset('app-assets/res/site/images/signin-image.jpg')}}" alt="sing up image"></figure>
                <a href="/usuario/novo" class="signup-image-link">Criar uma conta</a>
                <a href="/alocacao" class="signup-image-link">Voltar ao site</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login</h2>
                <form class='register-form' id='login-form' action='/usuario/verificalogin'>
                    <div class='form-group'>
                        <label for='user'><i class='zmdi zmdi-email'></i></label>
                        <input type='user' name='usuario'  placeholder='Seu usuario'/>
                    </div>
                    <div class='form-group'>
                        <label for='pass'><i class='zmdi zmdi-lock'></i></label>
                        <input type='password' name='senha'  placeholder='Senha'/>
                    </div>
                    <div class='form-group form-button'>
                        <input type='submit' name='login' id='login' class='form-submit' value='Entrar'/>
                    </div>
                </form>
            </div>
            </div>
    </div>
</div>
<script src="{{asset('app-assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('app-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
                           