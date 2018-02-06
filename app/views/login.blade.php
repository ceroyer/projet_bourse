@extends( 'layout' )

@section('content')



<h1>INSCRIPTION</h1>
<form action="{{ url('/signup') }}" method="POST">
	<label>Votre login</label>
	<input type="text" name="	">
	<label>Votre Mot de passe</label>
	<input type="password" name="	">
	<input type="submit">
</form>

@if($error)
<h2 style='color:red'>Wrong login or password!</h2>
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



