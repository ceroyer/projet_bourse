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
          <input style="color:black" class="searchbar1" type="text" value="" placeholder="Recherche"/>
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
        @foreach($myActions as $myAction)
          <tr id="{{$myAction['Name']}}"  >
            <td>{{ $myAction['Name'] }}</td>
            <td>{{ $myAction['ISIN'] }}</td>
            <td>{{ $myAction['Market'] }}</td>
            <td>{{ $myAction['Last'] }}</td>
            <td>{{ $myAction['Volume'] }}</td>
            <td>{{ $myAction['ActChange'] }}</td>
            <td>{{ $myAction['DateTime'] }}</td>
            <td>{{ $myAction['Timezone'] }}</td>
            <!-- oui le css inline est dégueulasse -->
            <!-- Rajouter : star-vide:hover{ opacity:1; } -->
            <!-- Rajouter : star{ cursor:pointer; } -->
              <?php
                if (isset($myAction['isin_action'])){
              ?>
                  <td title="retirer favoris" class="star star--pleine">
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
                <td title="ajouter favoris" class="star star--vide" style="opacity:0.5">
                  <form action="{{ url('/stats/addfav') }}" method="POST">
                    <input type="text" name="iduser" value="{{ $user['id']}}" hidden>
                    <input type="text" name="isinaction" value="{{ $myAction['ISIN'] }}" hidden>
                    <button class="btnstar" type="submit">☆</button></td>
                  </form>
              <?php
                }
               ?>
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>



    <table class="fixed_header myTable">
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
      @foreach ($myActions as $myAction)

      <tbody>
        <tr id="{{$myAction['Name']}}"  >
          <td>{{ $myAction['Name'] }}</td>
          <td>{{ $myAction['ISIN'] }}</td>
          <td>{{ $myAction['Market'] }}</td>
          <td>{{ $myAction['Last'] }}</td>
          <td>{{ $myAction['Volume'] }}</td>
          <td>{{ $myAction['ActChange'] }}</td>
          <td>{{ $myAction['DateTime'] }}</td>
          <td>{{ $myAction['Timezone'] }}</td>
          <td>
            <?php
              if (isset($myAction['isin_action'])){
                echo '☆';
              }else{

              }
             ?>
          </td>

        </tr>
       </tbody>
      @endforeach
    </table>


  </div>

  <div id="cac80">
  <h1>CAC 80</h1>
    <table class="fixed_header myTable">
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
      @foreach ($myActions as $myAction)
      <tbody>
        <tr id="{{$myAction['Name']}}"  >
          <td>{{ $myAction['Name'] }}</td>
          <td>{{ $myAction['ISIN'] }}</td>
          <td>{{ $myAction['Market'] }}</td>
          <td>{{ $myAction['Last'] }}</td>
          <td>{{ $myAction['Volume'] }}</td>
          <td>{{ $myAction['ActChange'] }}</td>
          <td>{{ $myAction['DateTime'] }}</td>
          <td>{{ $myAction['Timezone'] }}</td>
          <td>
            <?php
              if (isset($myAction['isin_action'])){
                echo 'bonjour';
              }
             ?>
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
    <table class="fixed_header myTable">
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
      @foreach ($myActions as $myAction)
      <tbody>
        <tr id="{{$myAction['Name']}}"  >
          <td>{{ $myAction['Name'] }}</td>
          <td>{{ $myAction['ISIN'] }}</td>
          <td>{{ $myAction['Market'] }}</td>
          <td>{{ $myAction['Last'] }}</td>
          <td>{{ $myAction['Volume'] }}</td>
          <td>{{ $myAction['ActChange'] }}</td>
          <td>{{ $myAction['DateTime'] }}</td>
          <td>{{ $myAction['Timezone'] }}</td>
          <td>
            <?php
              if (isset($myAction['isin_action'])){
                echo 'bonjour';
              }
             ?>
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
