<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page d'accueil (non connecté)</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <section class="accueil content">
    <div>
      <img src="./img/logoGros.png" alt="Logo">
    </div>
    <div>
      <h1>Trade Heaven</h1>
      <h2>" Ne cherchez plus la bourse, elle s'invite chez vous ! "</h2>
      <ul>
        <li>Consultation de la bourse en temps réel</li>
        <li>Anticipez vos futures actions</li>
      </ul>
      <button class="view-more1" onclick="fonctionDescendreInscription">Inscription</button>
      <button class="view-more2" onclick="fonctionDescendreConnextion">Déjà inscrit?</button>
    </div>
  </section>
  <section id="information">
    <div id="inscription">
    <form method="POST" id="formulaireInscription">
      <div>
        <label class="form_col" for="nom"> Identifiant: </label>
        <input type="text" name="nom"/>
      </div>
      <div>
        <label class="form_col" for="mail"> Adresse mail: </label>
        <input type="email" name="mail"/>
      </div>
      <div>
        <label class="form_col" for="mail"> Confirmation du mail: </label>
        <input type="email" name="mail"/>
      </div>
      <select name="jour" id="jour">
      <?php for($i=1;$i<=12;$i++){
          echo "<option value='$i'>$i</option>";
        } ?>
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
        <?php for($i=1900;$i<=2018;$i++){
          echo "<option value='$i'>$i</option>";
        } ?>
      </select>
      <button type="submit"> S'inscrire </button>
    </form>
    </div>
    <div id="connexion">
    <form method="POST" id="formulaireConnexion">
      <div>
        <label class="form_col" for="nom"> Identifiant: </label>
        <input type="text" name="nom"/>
      </div>
      <div>
        <label class="form_col" for="mail"> Mot de passe: </label>
        <input type="email" name="mail"/>
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
</body>
</html>
