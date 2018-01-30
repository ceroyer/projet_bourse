@extends( 'layout' )

@section('content')
 
@foreach( $admins as $admin )
<div id="admin">
	<h4>
		{{$admin->login}}
	</h4>

</div>
@endforeach

<h1>INSCRIPTION</h1>
<form action="{{ url('/signup') }}" method="POST">
	<label>Votre login</label>
	<input type="text" name="login">
	<label>Votre Mot de passe</label>
	<input type="password" name="password">
	<input type="submit">
</form>

<h1>CONNEXION</h1>
<form action="{{ url('/login') }}" method="POST">
	<label>Votre login</label>
	<input type="text" name="login">
	<label>Votre Mot de passe</label>
	<input type="password" name="password">
	<input type="submit">
</form>


@endsection



