@extends( 'layoutheaderfooter' )
@section('title')
Votre compte
@endsection
@section('additional_css')
<link rel="stylesheet" href="{{ url('/assets/css/compte.css')}}">
@endsection

@section('content')

<h1>Modifier vos informations</h1>
<h2>{{ $user['pseudo'] }}</h2>

<div id="infos">
	<form action="{{ url('/profile') }}" method="POST">
		<div id="mail">
			<h4><label>Changer l'email</label></h4>
			<input type="text" name="email" value="{{$user['email']}}">
		</div>
		<div id="mdp">
			<h4>Changer votre mot de passe</h4>
			<div>
				<label>Tapez votre ancien mot de passe :</label>
				<input type="password" name="password_old">
				<label>Votre nouveau mot de passe :</label>
				<input type="password" name="password_new">
				<label>Confirmer le mot de passe :</label>
				<input type="password" name="password_verif">
				<input type="hidden" name="id" value="{{$user['id']}}" />
				<button type="submit">Enregistrer</button>
			</div>
		</div>
	</form>

@if($user['role'] == 'admin' )

<a href="{{ url('/bo') }}">
	ACCEDER A LESPACE ADMIN
</a>
</div>

@endif



@endsection



