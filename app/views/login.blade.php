@extends( 'layout' )

@section('content')

<h1>INSCRIPTION</h1>
<form action="{{ url('/signup') }}" method="POST">
	<label>Entrez votre login</label>
	<input type="text" name="pseudo">
	<label>Entrez votre adresse mail</label>
	<input type="text" name="email">
	<label>Entrez à nouveau votre adresse mail</label>
	<input type="text" name="emailverif">
	<input type="submit">
</form>

@if($error)
<h2 style='color:red'>Identifiants invalides!</h2>
@endif
@if($deactive ==1)
<h2 style='color:red'>Compte désactivé</h2>

@endif

<h1>CONNEXION</h1>
<form action="{{ url('/login') }}" method="POST">
	<label>Votre Pseudo</label>
	<input type="text" name="login">
	<label>Votre Mot de passe</label>
	<input type="password" name="password">


	<input type="submit">
</form>


@endsection



