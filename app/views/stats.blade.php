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
<table class="table myTable">
  <thead class="table__header">
    <tr class="table__titleRow">
      <th class="table__title">Nom</th>
      <th class="table__title">ISIN</th>
      <th class="table__title">Market</th>
      <th class="table__title">Last</th>
      <th class="table__title">Volume</th>
      <th class="table__title">actChange</th>
      <th class="table__title">DateTime</th>
      <th class="table__title">TimeZone</th>
    </tr>
  </thead>
  <!--    @foreach ($actions as $action)

      <tbody>
        <tr>
          <td>{{ $action['nom'] }}</td>
          <td>{{ $action['ISIN'] }}</td>
          <td>{{ $action['ouverture'] }}</td>
          <td>{{ $action['fermeture'] }}</td>
          <td>{{ $action['bas'] }}</td>
          <td>{{ $action['haut'] }}</td>
          <td>{{ $action['variation'] }}
            @if($action['variation']>= 0)
              <svg style="fill:green"><polygon points='28,137.333 62.333,171.667 136.333,96.667 136.333,147.333 172,148 172,28.667 52,27.667 52.333,63.667 101.333,63.667'/></svg>
            @else
              <svg style="fill:red"><polygon points="101.356,135.319 52.359,135.794 52.372,171.795 172.359,169.634 171.203,50.306 135.544,51.318 136.034,101.981  61.314,27.702 27.315,62.366 "/> </svg>
            @endif</td>
          <td><a href="{{ url('/fav/') . $action['id'] }}"><i class="fa fa-star-o" aria-hidden="true"></i></a></td>
        </tr>
       </tbody>
    @endforeach -->

  </div>

      <div class="cac80">
        <h1>CAC 80</h1>
        <table class="table myTable second">
          <thead class="table__header">
            <tr class="table__titleRow">
              <th class="table__title">Nom</th>
              <th class="table__title">ISIN</th>
              <th class="table__title">Market</th>
              <th class="table__title">Last</th>
              <th class="table__title">Volume</th>
              <th class="table__title">actChange</th>
              <th class="table__title">DateTime</th>
              <th class="table__title">TimeZone</th>
            </tr>
          </thead>
          <tbody class="table__body">
            @foreach($actions as $action)
            <tr class="table__itemRow">
              <td class="table__item">{{$action['Name']}}</td>
              <td class="table__item">{{$action['ISIN']}}</td>
              <td class="table__item">{{$action['Market']}}</td>
              <td class="table__item">{{$action['Last']}}</td>
              <td class="table__item">{{$action['Volume']}}</td>
              <td class="table__item">{{$action['ActChange']}}</td>
              <td class="table__item">{{$action['DateTime']}}</td>
              <td class="table__item">{{$action['Timezone']}}</td>
            </tr>
            @endforeach
          </tbody>
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
          <td>{{ $action['Name'] }}</td>
          <td>{{ $action['ISIN'] }}</td>

          <td>{{ $action['Market'] }}</td>
          <td>{{ $action['Last'] }}</td>
          <td>{{ $action['Volume'] }}</td>
          <td>{{ $action['ActChange'] }}</td>
          <td>{{ $action['DateTime'] }}</td>
          <td>etoile</td>
          <td><i class="fa fa-star" aria-hidden="true"></i></td>

        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  </div>
  </div>

  <div id="test"></div>
@endsection

@section('additional_js')
<script type="text/javascript">
var newURL = window.location.protocol + "//" + window.location.host + "/projet_bourse/";
var cac40 = $('.cac40__table');
var base = cac40.html();
var path = newURL + 'api/getall';
getData();
console.log(base);
setInterval(function(){
   getData();
}, 5000);


function getData(){
  var xhr = $.getJSON(path, function(data){
  cac40.html(base);
   for (x in data) {
     cac40.append("<tbody class='table__body'><tr class='table__itemRow'>"+
     "<td class='table__item'>" + data[x].nom + "</td>"+
   "<td class='table__item'>" + data[x].isin + "</td>"+
   "<td class='table__item'>" + data[x].ouverture + "</td>"+
   "<td class='table__item'>" + data[x].fermeture + "</td>"+
   "<td class='table__item'>" + data[x].bas + "</td>"+
   "<td class='table__item'>" + data[x].haut + "</td>"+
   "<td class='table__item'>" + data[x].variation + "</td>"+
   '<td class="table__item"><a href="' + newURL + '"><i class="fa fa-star-o" aria-hidden="true"></i></a></td>'+
   "</tr></tbody>");
   }
   });
 }
</script>

    <script>
    function myFunction() {
    // Declare variables
    var input, filter, table, tr, name, isin, i;
    input = document.getElementById("myInput");
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
