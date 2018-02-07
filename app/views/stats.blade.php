@extends('layout')
@section('title')
Accueil
@endsection
@section('content')
<header>
  <form method="post" action="{{ url('/deco') }}">
    <input type="submit" name="deco" value="DECONNEXION">
  </form>
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


<div class="collapsible"  style="background-color: blue"><i class="fa fa-bell" aria-hidden="true" ></i></div>
<div class="content">
  <p>Voici votre bulletin</p>
</div>

<a href="{{ url('/profile') }}" class="button">Mon profil</a>

</header>

<section>
  <div id="cac40">
    <table>
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
      @foreach ($actions as $action)
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
      @endforeach
    </table>

  </div>

  <div id="cac80">
    <table>
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
      @foreach ($actions as $action)
        <tr>
          <td>{{ $action['nom'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['ouverture'] }}</td>
          <td>{{ $action['fermeture'] }}</td>
          <td>{{ $action['bas'] }}</td>
          <td>{{ $action['haut'] }}</td>
          <td>{{ $action['variation'] }}</td>
        </tr>
      @endforeach
    </table>
  </div>
  <div>
    <table>
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
      @foreach ($actions as $action)
        <tr>
          <td>{{ $action['nom'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['ouverture'] }}</td>
          <td>{{ $action['fermeture'] }}</td>
          <td>{{ $action['bas'] }}</td>
          <td>{{ $action['haut'] }}</td>
          <td>{{ $action['variation'] }}</td>
        </tr>
      @endforeach
    </table>
  </div>


</section>




@endsection
