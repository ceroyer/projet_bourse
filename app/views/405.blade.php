@extends( 'layout' )
@section('titre')
  404
@endsection
@section('content')

    <h1>Erreur 405</h1>
    <p>Vous n'êtes pas autorisé à voir cette page. Etes-vous connecté en tant qu'administrateur?</p>
    <a href="{{ url('') }}" class="button">retour à l'accueil</a>

@endsection
