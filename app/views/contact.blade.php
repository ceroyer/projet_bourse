@extends( 'layoutheaderfooter' )
@section('title')
Contact
@endsection
@section('additional_css')
  <link rel="stylesheet" type="text/css" href="{{ url( '/assets/css/contact.css' ) }}">
@endsection
@section('content')

<div class="contact">
  <h1 class="contact__titre">Vous avez une question ou une requête ? Vous êtes au bon endroit !</h1>
  <div class="contact__content">
    <button type="submit" class="contact__contentIcon btn btn-info">
      <i class="fa fa-envelope"></i>
    </button>
    <p class="contact__contentText">Contacter l'administrateur à l'adresse suivante :</p>
    <p class="contact__contentLink"><a href="mailto:philippe.chantecaille@univ-poitiers.fr">philippe.chantecaille@univ-poitiers.fr</a></p>
  </div>
</div>


@endsection

