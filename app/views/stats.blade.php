@extends('layoutheaderfooter')
@section('title')
Accueil
@endsection
@section('additional_css')
<link rel="stylesheet" href="assets/css/header+footer+admin.css">
@endsection
@section('additional_css')
 <link rel="stylesheet" type="text/css" href="assets/css/stat.css">
@endsection
@section('content')
<header>
  <!-- <form method="post" action="{{ url('/deco') }}">
    <input type="submit" name="deco" value="DECONNEXION">
  </form> -->

<!-- <div class="collapsible"  style="background-color: blue"><i class="fa fa-bell" aria-hidden="true" ></i></div> -->

<!-- <a href="{{ url('/profile') }}" class="button">Mon profil</a> -->
</header>
<div class="all">
  <div id="conteneur">
    <div id="crossbar1">
        <h1>SBF 120</h1>
        <div id="search">
          <input class="searchbar1" type="text" value="Recherche"/>
          <button type="" class="btn_searchbar"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div id="cac">
      <div id="cac40">
        <h1>CAC 40</h1>
    <table>
      <thead>
        <tr>
          <td>Nom</td>
          <td>ISIN</td>
          <td>Ouverture</td>
          <td>Fermeture</td>
          <td>Min</td>
          <td>Max</td>
          <td>Variation</td>
          <td>Fav</td>
        </tr>
       </thead>
      @foreach ($actions as $action)
      <tbody>
        <tr>
          <td>{{ $action['nom'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['ouverture'] }}</td>
          <td>{{ $action['fermeture'] }}</td>
          <td>{{ $action['bas'] }}</td>
          <td>{{ $action['haut'] }}</td>
          <td>{{ $action['variation'] }}</td>
          <td><a href="{{ url('/fav/') . $action['id'] }}"><i class="fa fa-star-o" aria-hidden="true"></i></a></td>
        </tr>
       </tbody>
      @endforeach
    </table>
  </div>

  <div id="cac80">
  <h1>CAC 80</h1>
    <table>
    <thead>
      <tr>
        <td>Nom</td>
        <td>ISIN</td>
        <td>Ouverture</td>
        <td>Fermeture</td>
        <td>Min</td>
        <td>Max</td>
        <td>Variation</td>
        <td>Fav</td>
      </tr>
      </thead>
      @foreach ($actions as $action)
      <tbody>
        <tr>
          <td>{{ $action['nom'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['ouverture'] }}</td>
          <td>{{ $action['fermeture'] }}</td>
          <td>{{ $action['bas'] }}</td>
          <td>{{ $action['haut'] }}</td>
          <td>{{ $action['variation'] }}</td>
        </tr>
       </tbody>
      @endforeach
    </table>
  </div>
  </div>
  </div>
  <div id="fav">
    <h1>MES FAVORIS</h1>
    <div id="fav1">
    <table>
    <thead>
      <tr>
        <td>Nom</td>
        <td>ISIN</td>
        <td>Ouverture</td>
        <td>Fermeture</td>
        <td>Min</td>
        <td>Max</td>
        <td>Variation</td>
        <td>Fav</td>
      </tr>
       </thead>
      @foreach ($actions as $action)
      <tbody>
        <tr>
          <td>{{ $action['nom'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['ouverture'] }}</td>
          <td>{{ $action['fermeture'] }}</td>
          <td>{{ $action['bas'] }}</td>
          <td>{{ $action['haut'] }}</td>
          <td>{{ $action['variation'] }}</td>
        </tr>
         </tbody>
      @endforeach
    </table>
  </div>
  <a href="#">Modifier les favoris</a>
    </div>
  </div>
@endsection
