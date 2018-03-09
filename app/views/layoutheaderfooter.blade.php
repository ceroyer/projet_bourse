<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trade Heaven: @yield('title')</title>
  <!-- @@@ CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url( '/assets/css/app.css' ) }}">
  <link rel="stylesheet" href="{{ url( '/assets/css/header+footer.css' ) }}">
  <link rel="stylesheet" href="{{ url( '/assets/css/font-family.css' ) }}">
  <link rel="stylesheet" href="{{ url( '/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <style type="text/css">
    *{
      color:white;
    }
    table{
      border: 1px solid white;
    }

    .content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      background-color: red;
    }
  </style>
  @yield('additional_css')
</head>
<body>
  <nav id="header">
    <div id="tradeheaven">
      <img src="assets/img/logo_simple.png" alt="logo">
      <h2>Trade Heaven</h2>
    </div>
    <h1>@yield('title')</h1>
    <div id="compte">
      <div class="collapsible" id="alerte">
        <img src="assets/img/cloche.png" alt="alerte">
        <div></div>
      </div>
      <div class="content">
        <p>Voici votre bulletin</p>
      </div>
      @if ($user != null)
      <a href="{{ url('/profile') }}">
        <p>{{ $user['pseudo'] }}</p>
        <p>Mon profil</p>
      </a>
      @endif
      <img src="assets/img/profil.png" alt="profil">
      <a method="post" href="{{ url('/deco') }}">Déconnexion</a>
    </div>
  </nav>

  <div class="container-fluid">
  @yield('content')
  </div>

  <nav id="footer">
    <ul>
      <li>@Copyright 2018</li>
      <li><a href="#">Mentions légales</a></li>
      <li><a href="#">Conditions d'utilisation</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <!-- @@@ JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="{{ url( '/assets/js/app.js' ) }}"></script>
  @yield('additional_js')
</body>
</html>

