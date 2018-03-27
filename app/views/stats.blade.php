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
  <div class="stats__conteneur">
    <div class="crossbar1">
        <h1 class="crossbar1__titre">SBF 120</h1>
        <div id="search" class="crossbar1__content">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
          <button type="" class="btn_searchbar crossbar1__button"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div class="cac">
      <div class="cac40">
        <h1>CAC 40</h1>
        <table class="fixed_header myTable">
        <thead class="table__header">
          <tr class="table__titleRow">
            <th class="table__title">Nom</th>
            <th class="table__title">ISIN</th>
            <th class="table__title">Ouverture</th>
            <th class="table__title">Fermeture</th>
            <th class="table__title">Min</th>
            <th class="table__title">Max</th>
            <th class="table__title">Variation</th>
            <th class="table__title">Fav</th>
          </tr>
          </thead>
          @foreach ($myActions as $myAction)
          <tbody class="table__body">
            <tr class="table__itemRow" id="{{$myAction['Name']}}">
              <td class="table__item">{{ $myAction['Name'] }}</td>
              <td class="table__item">{{ $myAction['ISIN'] }}</td>
              <td class="table__item">{{ $myAction['Market'] }}</td>
              <td class="table__item">{{ $myAction['LastCourse'] }}</td
              <td class="table__item">{{ $myAction['Volume'] }}</td>
              <td class="table__item">{{ $myAction['Variation'] }}</td>
              <td class="table__item">{{ $myAction['DateTime'] }}</td>
              <td class="table__item">{{ $myAction['Timezone'] }}</td>
              <!-- oui le css inline est dégueulasse -->
              <!-- Rajouter : star-vide:hover{ opacity:1; } -->
              <!-- Rajouter : star{ cursor:pointer; } -->
                <?php
                  if (isset($myAction['isin_action'])){
                ?>
                    <td class="table__item" title="retirer favoris" class="star star--pleine">
                      <form action="{{ url('/stats/removefav') }}" method="POST">
                        <input type="text" name="iduser" value="{{ $user['id']}}" hidden>
                        <input type="text" name="isinaction" value="{{ $myAction['ISIN'] }}" hidden>
                        <input type="text" name="favid" value="{{ $myAction['favid'] }}" hidden>
                        <button class="btnstar" type="submit">★</button>
                      </form>
                    </td>
                <?php
                  }else{
                ?>
                  <td class="table__item" title="ajouter favoris" class="star star--vide" style="opacity:0.5">
                    <form action="{{ url('/stats/addfav') }}" method="POST">
                      <input type="text" name="iduser" value="{{ $user['id']}}" hidden>
                      <input type="text" name="isinaction" value="{{ $myAction['ISIN'] }}" hidden>
                      <button class="btnstar" type="submit">☆</button></td>
                    </form>
                  </td>
                <?php
                  }
                 ?>
            </tr>
           </tbody>
          @endforeach
        </table>
        <h1>CAC 80</h1>
        <table class="fixed_header myTable">
        <thead class="table__header">
          <tr class="table__titleRow">
            <th class="table__title">Nom</th>
            <th class="table__title">ISIN</th>
            <th class="table__title">Ouverture</th>
            <th class="table__title">Fermeture</th>
            <th class="table__title">Min</th>
            <th class="table__title">Max</th>
            <th class="table__title">Variation</th>
            <th class="table__title">Fav</th>
          </tr>
          </thead>
          @foreach ($myActions as $myAction)
          <tbody class="table__body">
            <tr class="table__itemRow" id="{{$myAction['Name']}}">
              <td class="table__item">{{ $myAction['Name'] }}</td>
              <td class="table__item">{{ $myAction['ISIN'] }}</td>
              <td class="table__item">{{ $myAction['Market'] }}</td>
              <td class="table__item">{{ $myAction['lastCourse'] }}</td>
              <td class="table__item">{{ $myAction['Volume'] }}</td>
              <td class="table__item">{{ $myAction['Variation'] }}</td>
              <td class="table__item">{{ $myAction['DateTime'] }}</td>
              <td class="table__item">{{ $myAction['Timezone'] }}</td>
              <!-- oui le css inline est dégueulasse -->
              <!-- Rajouter : star-vide:hover{ opacity:1; } -->
              <!-- Rajouter : star{ cursor:pointer; } -->
                <?php
                  if (isset($myAction['isin_action'])){
                ?>
                    <td class="table__item" title="retirer favoris" class="star star--pleine">
                      <form action="{{ url('/stats/removefav') }}" method="POST">
                        <input type="text" name="iduser" value="{{ $user['id']}}" hidden>
                        <input type="text" name="isinaction" value="{{ $myAction['ISIN'] }}" hidden>
                        <input type="text" name="favid" value="{{ $myAction['favid'] }}" hidden>
                        <button class="btnstar" type="submit">★</button>
                      </form>
                    </td>
                <?php
                  }else{
                ?>
                  <td class="table__item" title="ajouter favoris" class="star star--vide" style="opacity:0.5">
                    <form action="{{ url('/stats/addfav') }}" method="POST">
                      <input type="text" name="iduser" value="{{ $user['id']}}" hidden>
                      <input type="text" name="isinaction" value="{{ $myAction['ISIN'] }}" hidden>
                      <button class="btnstar" type="submit">☆</button></td>
                    </form>
                  </td>
                <?php
                  }
                 ?>
            </tr>
           </tbody>
          @endforeach
        </table>

        <h1>FAVORIS</h1>
        <table class="fixed_header myTable">
        <thead class="table__header">
          <tr class="table__titleRow">
            <th class="table__title">Nom</th>
            <th class="table__title">ISIN</th>
            <th class="table__title">Ouverture</th>
            <th class="table__title">Fermeture</th>
            <th class="table__title">Min</th>
            <th class="table__title">Max</th>
            <th class="table__title">Variation</th>
            <th class="table__title">Fav</th>
          </tr>
          </thead>
          @foreach ($myActions as $myAction)
          <tbody class="table__body">
            <tr class="table__itemRow" id="{{$myAction['Name']}}">
              <td class="table__item">{{ $myAction['Name'] }}</td>
              <td class="table__item">{{ $myAction['ISIN'] }}</td>
              <td class="table__item">{{ $myAction['Market'] }}</td>
              <td class="table__item">{{ $myAction['lastCourse'] }}</td>
              <td class="table__item">{{ $myAction['Volume'] }}</td>
              <td class="table__item">{{ $myAction['Variation'] }}</td>
              <td class="table__item">{{ $myAction['DateTime'] }}</td>
              <td class="table__item">{{ $myAction['Timezone'] }}</td>
              <!-- oui le css inline est dégueulasse -->
              <!-- Rajouter : star-vide:hover{ opacity:1; } -->
              <!-- Rajouter : star{ cursor:pointer; } -->
                <?php
                  if (isset($myAction['isin_action'])){
                ?>
                    <td class="table__item" title="retirer favoris" class="star star--pleine">
                      <form action="{{ url('/stats/removefav') }}" method="POST">
                        <input type="text" name="iduser" value="{{ $user['id']}}" hidden>
                        <input type="text" name="isinaction" value="{{ $myAction['ISIN'] }}" hidden>
                        <input type="text" name="favid" value="{{ $myAction['favid'] }}" hidden>
                        <button class="btnstar" type="submit">★</button>
                      </form>
                    </td>
                <?php
                  }else{
                ?>
                  <td class="table__item" title="ajouter favoris" class="star star--vide" style="opacity:0.5">
                    <form action="{{ url('/stats/addfav') }}" method="POST">
                      <input type="text" name="iduser" value="{{ $user['id']}}" hidden>
                      <input type="text" name="isinaction" value="{{ $myAction['ISIN'] }}" hidden>
                      <button class="btnstar" type="submit">☆</button></td>
                    </form>
                  </td>
                <?php
                  }
                 ?>
            </tr>
           </tbody>
           @endforeach
        </table>


      </div>
    </div>
  </div>


@endsection
@section('additional_js')

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, name, isin, i;
  input = document.getElementsByClassName("searchbar1")[0];
  filter = input.value.toUpperCase();
  table = document.getElementsByClassName("myTable");
  tr = document.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    name = tr[i].getElementsByTagName("td")[0];
    isin = tr[i].getElementsByTagName("td")[1];
    if (name || isin) {
      if (name.innerHTML.toUpperCase().indexOf(filter) > -1 || isin.innerHTML.toUpperCase().indexOf(filter) > -1 ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
@endsection
