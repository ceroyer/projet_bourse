@extends('layout')
@section('title')
Accueil
@endsection
@section('content')
<header>
  <form method="post" action="{{ url('/deco') }}">
    <input type="submit" name="deco" value="DECONNEXION">
  </form>
  <a href="{{ url('/profile') }}" class="button">Mon profil</a>

</header>

<section>

</section>




@endsection
