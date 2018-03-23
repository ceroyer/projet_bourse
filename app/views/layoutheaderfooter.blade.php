<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>Trade Heaven: @yield('title')</title>
  <!-- @@@ CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url( '/assets/css/app.css' ) }}">
  <link rel="stylesheet" href="{{ url( '/assets/css/header+footer.css' ) }}">
  <link rel="stylesheet" href="{{ url( '/assets/css/font-family.css' ) }}">
  <link rel="stylesheet" href="{{ url( '/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  @yield('additional_css')
</head>
<body>
  <nav id="header">
    <a id="tradeheaven" href="{{ url('/stats') }}">
      <img src="assets/img/logo_simple.png" alt="logo">
      <h2>Trade Heaven</h2>
    </a>
    <h1>@yield('title')</h1>
    <div id="compte">
      <div class="collapsible" id="alerte">
        <img src="assets/img/cloche.png" alt="alerte">
        <div id="alertelight"></div>
        <div id="alertediv" class="content">
          <p>Voici votre bulletin</p>
        </div>
      </div>

      @if ($user != null)
      <a href="{{ url('/profile') }}">
        <p>{{ $user['pseudo'] }}</p>
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
      <li>© Copyright 2018</li>
      <li><a href="{{ url('/mention') }}">Mentions légales</a></li>
      <li><a href="#">Conditions d'utilisation</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>

  <!-- @@@ JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="{{ url( '/assets/js/app.js' ) }}"></script>
  @yield('additional_js')
</body>
</html>
