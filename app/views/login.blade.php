@extends( 'layout' )


@section('additional_css')
<link rel="stylesheet" href="{{ url('/assets/css/login.css')}}">
<link rel="stylesheet" href="{{ url('/assets/css/login.css')}}">
@endsection

@section('content')

<section class="accueil content">
  <div>
    <img src="{{ url('/assets/img/logoGros.png') }}" alt="Logo">
  </div>
  <div class="accueilText">
    <h1>Trade Heaven</h1>
    <h2>" Ne cherchez plus la bourse, elle s'invite chez vous ! "</h2>
    <ul>
      <li>Consultation de la bourse en temps réel</li>
      <li>Anticipez vos futures actions</li>
    </ul>
    <button class="view-more1" onclick="fonctionDescendreInscription">Inscription</button>
    <button class="view-more2" onclick="fonctionDescendreConnexion">Déjà inscrit?</button>
  </div>
</section>

<section id="information">
    <div class="inscription">
    <form action="{{ url('/signup') }}" method="POST" id="formulaireInscription">
      <h2>Inscription</h2>
      <div class="connecttext">
        <label class="form_col" for="pseudo"> Identifiant: </label>
        <input type="text" name="pseudo"/>
      </div>
      <div class="connecttext">
        <label class="form_col" for="email"> Adresse mail: </label>
        <input type="email" name="email"/>
      </div>
      <div class="connecttext">
        <label class="form_col" for="emailverif"> Confirmation du mail: </label>
        <input type="email" name="emailverif"/>
      </div>
      <div id="date">
        <select name="jour" id="jour">
      @for($i=1;$i<=31;$i++){
        <option value='{{$i}}'>{{$i}}</option>";
      @endfor
      </select>
      <select name="mois" id="mois">
        <option value="1">Janvier</option>
        <option value="2">Février</option>
        <option value="3">Mars</option>
        <option value="4">Avril</option>
        <option value="5">Mai</option>
        <option value="6">Juin</option>
        <option value="7">Juillet</option>
        <option value="8">Août</option>
        <option value="9">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Décembre</option>
      </select>
      <select name="annee" id="annee">
        @for($i=1900;$i<=2018;$i++)
          <option value='{{$i}}'>{{$i}}</option>";
        @endfor
      </select>
      </div>

      <button type="submit"> S'inscrire </button>
    </form>
    </div>
    @if($err == true)
    <h2 style='color:red'>Email Incorrect!</h2>
   @endif
    @if($error)
      <h2 style='color:red'>Identifiants invalides!</h2>
    @endif
    @if($deactive === true)
      <h2 style='color:red'>Compte désactivé</h2>
    @endif


    <div class="connexion">

    <form action="{{ url('/login') }}" method="POST" id="formulaireConnexion">
      <h2>Connexion</h2>
      <div class="connecttext">
        <label class="form_col" for="login"> Identifiant: </label>
        <input type="text" name="login"/>
      </div>
      <div class="connecttext">
        <label class="form_col" for="password"> Mot de passe: </label>
        <input type="password" name="password"/>
      </div>
      <button type="submit"> Connexion </button>
    </form>
    </div>
  </section>

<section id="commentaire">
    <div>
      <h1>Lucas FTEUR</h1>
      <h2>"Waouh ! Ce site m'a permis de gagner 10 000€ sans bouger de chez moi !"</h2>
    </div>
    <div>
      <h1>Silvie SAVIE</h1>
      <h2>"Waouh ! Trade heaven a changer ma vie !<br>Je gagne mieux ma vie dorénavant !"</h2>
    </div>
    <div>
      <h1>Gaetan GENTE</h1>
      <h2>"Waouh ! Ce site m'a permis de devenir un trader aguerri !"</h2>
    </div>
    <div>
      <h1>Timothé CAFE</h1>
      <h2>"Waouh ! J'ai pu gagner un point de plus grâce à ce rôle de chef de projet !"</h2>
    </div>
  </section>

@endsection
