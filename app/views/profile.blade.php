@extends( 'layoutheaderfooter' )
@section('title')
Votre compte
@endsection
@section('additional_css')
<link rel="stylesheet" href="{{ url('/assets/css/compte.css')}}">
@endsection

@section('content')

<div class="titre">
	<h1 class="titre__text">Modifier vos informations</h1>
</div>

<div class="infos">
	<form action="{{ url('/profile') }}" method="POST">
		<div class="infos__mail">
			<h4 class="infos__h4Common"><label class="infos__label infos__labelCommon">Changer l'email</label></h4>
			<input class="infos__mailInput infos__inputCommon"type="text" name="email" value="{{$user['email']}}">
		</div>
		<div class="infos__mdp">
			<h4 class="infos__mdpTitre infos__h4Common">Changer votre mot de passe</h4>
			<div class="infos__mdpDiv">
				<label class="infos__labelCommon" >Tapez votre ancien mot de passe :</label>
				<input class="infos__mdpInput infos__inputCommon" type="password" name="password_old">
				<label class="infos__labelCommon">Votre nouveau mot de passe :</label>
				<input class="infos__mdpInput infos__inputCommon" type="password" name="password_new">
				<label class="infos__labelCommon" >Confirmer le mot de passe :</label>
				<input class="infos__mdpInput infos__inputCommon" type="password" name="password_verif">
				<input class="infos__mdpInput infos__inputCommon" type="hidden" name="id" value="{{$user['id']}}" />
				<button class="infos__button--mdp infos__buttonCommon" type="submit">Enregistrer</button>
			</div>
		</div>
	</form>
	<div class="infos__desac">
		<form action="{{url('/deactivaded')}}" method="POST">
			<h4 class="infos__h4Common"><label class="infos__label infos__labelCommon">Partir en vacances et desactiver mon compte</label></h4>
    	<input  class="infos__inputCommon" type="text" name="id" value="{{ $user['id'] }}" hidden>
    	<td><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger infos__button infos__buttonCommon"><i class="fa fa-plane"></i>
   		</button></td>
    	<div id="myModal" class="modal fade">
	    	<div class="modal-dialog">
	      	<div class="modal-content">
	         	 <div class="modal-header">
	             	 <button type="button" class="close infos__button infos__buttonCommon" data-dismiss="modal" aria-hidden="true">&times;</button>
	             	 <h4 class="modal-title infos__h4Common">Confirmation</h4>
	          	</div>
	          	<div class="modal-body">
	             	 <p class="infos__pCommon">Voulez-vous vraiment désactiver votre compte de manière definitive ?</p>
	               <p class="text-warning infos__pCommon"><small>Pour le réactiver, contactez l'administrateur du site par mail !</small></p>
	         		</div>
	          	<div class="modal-footer">
	              <button type="button" class="btn btn-default infos__button infos__buttonCommon" data-dismiss="modal">Annuler</button>
	              <button type="submit" class="btn btn-primary infos__button infos__buttonCommon">Je désactive mon compte</button>
	          	</div>
	      	</div>
	 	 		</div>
	  	</div>
		</form>
	</div>

	@if($user['role'] == 'admin' )
	<a href="{{ url('/bo') }}" class="infos__admin"><h4 class="infos__adminTitre infos__h4Common">Accéder à l'espace admin</h4></a>
	@endif
</div>
@endsection

@section('additional_js')
<script type="text/javascript">
	$('#myModal').on('show.bs.modal', function (event) {
  	var button = $(event.relatedTarget);
	});
</script>

@endsection
