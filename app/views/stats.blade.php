@extends('layoutheaderfooter')
@section('title')
Accueil
@endsection
@section('additional_css')
<link rel="stylesheet" href="{{ url ('/assets/css/header+footer.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url ('/assets/css/stat.css')}}">
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
  <div class="conteneur">
    <div class="crossbar1">
        <h1 class="crossbar1__titre">SBF 120</h1>
        <div id="search" class="crossbar1__content">
          <input style="color:black" class="searchbar1 crossbar1__input" type="text" value="" placeholder="Recherche"/>
          <button type="" class="btn_searchbar crossbar1__button"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div class="cac">
      <div class="cac40">
        <h1>CAC 40</h1>
        <table class="cac40__table">
          <thead class="cac40__tableHead">
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

          <tbody class="cac40__tableBody">
            <tr>
              <td>{{ $action['nom'] }}</td>
              <td>{{ $action['ISIN'] }}</td>
              <td>{{ $action['ouverture'] }}</td>
              <td>{{ $action['fermeture'] }}</td>
              <td>{{ $action['bas'] }}</td>
              <td>{{ $action['haut'] }}</td>
              <td>{{ $action['variation'] }}
                @if($action['variation']>= 0) <!-- fleche vers le haut -->
                  <svg style="fill:green"><polygon points='28,137.333 62.333,171.667 136.333,96.667 136.333,147.333 172,148 172,28.667 52,27.667 52.333,63.667 101.333,63.667'/></svg>
                @else
                  <svg style="fill:red"><polygon points="101.356,135.319 52.359,135.794 52.372,171.795 172.359,169.634 171.203,50.306 135.544,51.318 136.034,101.981  61.314,27.702 27.315,62.366 "/> </svg>
                @endif</td>
              <td><a href="{{ url('/fav/') . $action['id'] }}"><i class="fa fa-star-o" aria-hidden="true"></i></a></td>
            </tr>
           </tbody>
          @endforeach
        </table>
      </div>

      <div class="cac80">
        <h1>CAC 80</h1>
        <table class="cac80__table">
          <thead class="cac80__tableHead">
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
          <tbody class="cac80__tableBody">
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
  <div class="fav">
    <h1 class="fav__titre">MES FAVORIS</h1>
    <div class="fav__tableau">
    <table>
    <thead class="fav__entete">
      <tr class="fav__ligneTitre">
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
      <tbody class="fav__body">
        <tr>
          <td>{{ $action['nom'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['ouverture'] }}</td>
          <td>{{ $action['fermeture'] }}</td>
          <td>{{ $action['bas'] }}</td>
          <td>{{ $action['haut'] }}</td>
          <td>{{ $action['variation'] }}</td>
          <td>etoile</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  <a href="#" class="fav__modif">Modifier les favoris</a>
  </div>
  </div>
@endsection
