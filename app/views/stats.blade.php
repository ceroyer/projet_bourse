@extends('layoutheaderfooter')
@section('title')
Accueil
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

        <table class="fixed_header myTable">
      <thead>
        <tr>
          <th>Nom</th>
          <th>ISIN</th>
          <th>Market</th>
          <th>Last</th>
          <th>Volume</th>
          <th>actChange</th>
          <th>DateTime</th>
          <th>TimeZone</th>
          <th>Suivis</th>
        </tr>
      </thead>
      <tbody>
        @foreach($actions as $action)
          <tr id="{{$action['Name']}}"  >
            <td>{{ $action['Name'] }}</td>
            <td>{{ $action['ISIN'] }}</td>
            <td>{{ $action['Market'] }}</td>
            <td>{{ $action['Last'] }}</td>
            <td>{{ $action['Volume'] }}</td>
            <td>{{ $action['ActChange'] }}</td>
            <td>{{ $action['DateTime'] }}</td>
            <td>{{ $action['Timezone'] }}</td>
            <td>sdfgxdhg
              <!--   IF ACTION ALORS ETOILES-->
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>



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
        <tr id="{{$action['Name']}}"  >
          <td>{{ $action['Name'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['Market'] }}</td>
          <td>{{ $action['Last'] }}</td>
          <td>{{ $action['Volume'] }}</td>
          <td>{{ $action['ActChange'] }}</td>
          <td>{{ $action['DateTime'] }}</td>
          <td>{{ $action['Timezone'] }}</td>
          <td>$favori['fav']</td>

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
        <tr id="{{$action['Name']}}"  >
          <td>{{ $action['Name'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['Market'] }}</td>
          <td>{{ $action['Last'] }}</td>
          <td>{{ $action['Volume'] }}</td>
          <td>{{ $action['ActChange'] }}</td>
          <td>{{ $action['DateTime'] }}</td>
          <td>{{ $action['Timezone'] }}</td>
          <td>sdfgxdhg
            <!--   IF ACTION ALORS ETOILES-->
          </td>

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
        <tr id="{{$action['Name']}}"  >
          <td>{{ $action['Name'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['Market'] }}</td>
          <td>{{ $action['Last'] }}</td>
          <td>{{ $action['Volume'] }}</td>
          <td>{{ $action['ActChange'] }}</td>
          <td>{{ $action['DateTime'] }}</td>
          <td>{{ $action['Timezone'] }}</td>
          <td>sdfgxdhg
            <!--   IF ACTION ALORS ETOILES-->
          </td>

        </tr>
         </tbody>
      @endforeach
    </table>
  </div>
  <a href="#">Modifier les favoris</a>
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
