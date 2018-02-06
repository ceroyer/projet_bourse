@extends('layout')
@section('title')
Accueil
@endsection
@section('content')
<header>
  <form method="post" action="{{ url('/deco') }}">
    <input type="submit" name="deco" value="DECONNEXION">
  </form>
  <form method="get" action="{{ url('/profile') }}">
    <input type="submit" name="profile" value="PROFILE">
  </form>

</header>

<section>

</section>




@endsection
