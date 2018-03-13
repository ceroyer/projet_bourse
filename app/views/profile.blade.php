@extends( 'layoutheaderfooter' )
@section('title')
Votre compte
@endsection
@section('additional_css')
<link rel="stylesheet" href="{{ url('/assets/css/compte.css')}}">
@endsection

@section('content')

<div id="titre">
	<h1>Modifier vos informations</h1>
	<h2>{{ $user['pseudo'] }}</h2>
</div>

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

<form action="{{url('/deactivaded')}}" method="POST">
	<label>Partir en vacances et desactiver mon compte</label>
    <input type="text" name="id" value="{{ $user['id'] }}" hidden>
    <td><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger"><i class="fa fa-plane"></i>
    </button></td>
    <div id="myModal" class="modal fade">
	    <div class="modal-dialog">
	      <div class="modal-content">
	          <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	              <h4 class="modal-title">Confirmation</h4>
	          </div>
	          <div class="modal-body">
	              <p>Voulez vous vraiment vous desactiver de manière definitive?</p>
	               <p class="text-warning"><small>Pour réactiver, contacter l'administrateur du site par mail!</small></p>
	         </div>
	          <div class="modal-footer">
	              <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	              <button type="submit" class="btn btn-primary">Je me désactive !!! YOLO</button>
	          </div>
	      </div>
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

@section('additional_js')

<script type="text/javascript">
$('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
});

</script>

@endsection

