@extends( 'layout' )
@section('title')
Votre compte
@endsection
@section('content')



<h1>VOTRE COMPTE</h1>
<h2>{{ $user['pseudo'] }}</h2>
<form action="{{ url('/profile') }}" method="POST">
	<label>Changer l'email</label>
	<input type="text" name="email" value="{{$user['email']}}">


	<h3>Changer votre mot de passe</h3>
	<label>Tapez votre ancien mot de passe</label>
	<input type="password" name="password_old">
	<label>Votre nouveau mot de passe</label>
	<input type="password" name="password_new">
	<label>Confirmer le mot de passe</label>
	<input type="password" name="password_verif">
	<input type="hidden" name="id" value="{{$user['id']}}" />
	<button type="submit">Enregistrer</button>
</form>



@endsection



