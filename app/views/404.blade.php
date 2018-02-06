@extends( 'layout' )
@section('titre')
  404
@endsection
@section('content')

    <h1>Erreur 404</h1>
    <p>la page n'existe pas.</p>
    <a href="{{ url('') }}" class="button">retour à l'accueil</a>

@endsection
