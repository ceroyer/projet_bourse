<?php
namespace Controllers;
use Models\Base;
use Models\Users;

class LoginController extends Controller{

  public function loginPage(){

    if (isset($_SESSION['login'])){  //Lorsque l'utilisateur est deja connecté
      redirect('/stats'); // Accès à l'espace connecté
    }
    else { // Si pas connecté affichage de l'espace connexion
      global $blade;
      $logins = Users::getInstance()->getAll();
      if (!isset($_SESSION['error'])){ // Création Variable error
        $_SESSION['error'] = false; // contient "faux"
      }
      if (!isset($_SESSION['deactive'])){ // Création Variable Deactive
         $_SESSION['deactive'] = false; // contient "faux"
      }
      if (!isset($_SESSION['errorVide'])){ // Création Variable error
        $_SESSION['errorVide'] = false; // contient "faux"
      }
      if (!isset($_SESSION['errorEmail'])){ // Création Variable error
        $_SESSION['errorEmail'] = false; // contient "faux"
      }
      if (!isset($_SESSION['pseudoInvalide'])){ // Création Variable error
        $_SESSION['pseudoInvalide'] = false; // contient "faux"
      }
      if (!isset($_SESSION['pseudoCourt'])){ // Création Variable error
        $_SESSION['pseudoCourt'] = false; // contient "faux"
      }
      if (!isset($_SESSION['errorAge'])){  //si var arrorAge pas créée
        $_SESSION['errorAge'] = false;
      }
      if (!isset($_SESSION['pseudoexist'])){  //si var pseudoexist pas créée
        $_SESSION['pseudoexist'] = false;
      }
      if (!isset($_SESSION['mailexist'])){  //si var mailexist pas créée
        $_SESSION['mailexist'] = false;
      }
      echo $blade->render(
      'login', // appel de la view

      ['error' => $_SESSION['error'],'deactive' => $_SESSION['deactive'],'errorVide' => $_SESSION['errorVide'],'errorEmail' => $_SESSION['errorEmail'],'pseudoInvalide' => $_SESSION['pseudoInvalide'],'pseudoCourt' => $_SESSION['pseudoCourt'], 'errorAge' => $_SESSION['errorAge'], 'pseudoexist' => $_SESSION['pseudoexist'], 'mailexist' => $_SESSION['mailexist']]);
       LoginController::resetError();

    }
  }

public function login(){
  global $blade;
  $tempOk = false;
  LoginController::resetError();
  $logins = Users::getInstance()->getAll();
  
  if(!empty($_POST['password']) || !empty($_POST['login'])){ // Si champs pas vides
    $loginconnect = str_replace(' ', '-', $_POST['login']); // Recuppération login sans caractères spéciaux
    $loginconnect = preg_replace('#[^A-Za-z0-9]+#', '', $loginconnect);
    $passwordconnect = sha1($_POST['password']); // Conversion en Sha1
    
    foreach ($logins as $login) {
      if ($login['pseudo'] == $loginconnect AND $login['password'] == $passwordconnect) {  // Si pseudo & mdp correct
        $desactive = $login['active'];
        if($desactive == 1) { // Session desactivé
            $_SESSION['deactive'] = true;
            redirect('/');
            break;
        }
        else{ 
          $tempOk = true;  // mdp & pseudo ok + compte activé
        }
      }
  }
  if ($tempOk == true) {
    $_SESSION['login']=$login['pseudo'];
    $_SESSION['id']=$login['id'];
    redirect('/stats');
    break;
  }
  else{
    
      $_SESSION['error'] = true;
      redirect('/');
    }
  }
  else{
    $_SESSION['error'] = true;
    redirect('/');
  }
}

public function signup(){
  global $blade;

  // Traitement Charactères spéciaux
  $pseudochar = str_replace(' ', '-', $_POST['pseudo']); // Recuppération pseudo sans caractères spéciaux
  $pseudochar = preg_replace('#[^A-Za-z0-9]+#', '', $pseudochar);
  // Traitement Pseudo Trop court
  $pseudoTaille = strlen ($_POST['pseudo']);
  // Traitement Age
  date_default_timezone_get();//récupérer le serveur utilisé en cours
  $currentDateTmp = date('d-m-Y', time());// date du jour
  $currentDate = date_create($currentDateTmp);
  $age = date_create($_POST['jour'] . '-' . $_POST['mois'] . '-' . $_POST['annee']);//date de naissance de l'utilisateur;
  $controlAge = date_diff( $age , $currentDate );
  // Traitement Doublons BDD
  $pseudo = $_POST['pseudo'];
  $email = $_POST['email'];
  $users = Users::getInstance()->getAll();
  $temppseudo=false;
  $tempmail=false;
  foreach ($users as $user ) {
    if($pseudo === $user['pseudo']){
      $temppseudo = true;
    }
    if($email === $user['email']){
      $tempmail = true;
    }
  }

  if(empty($_POST['pseudo']) || empty($_POST['email']) || empty($_POST['emailverif'])) { // Si champs pas vides
    $_SESSION['errorVide'] = true;
    redirect('/#information');
  }

  elseif ($_POST['email'] != $_POST['emailverif'] ) { // Email invalides
    $_SESSION['errorEmail'] = true;
    redirect('/#information');
  }
  // Pseudo characteres speciaux
  elseif ($pseudochar != $_POST['pseudo']) {
    $_SESSION['pseudoInvalide'] = true;
    redirect('/#information');
  }

  // Pseudo trop court
  elseif ( $pseudoTaille < 5) {
    $_SESSION['pseudoCourt'] = true;
    redirect('/#information');
  }

  // Age
  elseif ($controlAge->y <18) { //test age
    $_SESSION['errorAge'] = true;
    redirect('/#information');
  }

  // Verif pseudo déjà existant dans bdd
  elseif ($temppseudo === true) {
    $_SESSION['pseudoexist'] = true ;
    redirect('/#information');
  }

  // Verif mail déjà existant dans bdd
  elseif ($tempmail === true) {
    $_SESSION['mailexist'] = true;
    redirect('/#information');
  }

  else{
    $longueur = 10; // Définition de la taille du mot de passe aléatoire
    $mdp=""; // On initialise la variable $mdp
    $caract = "AaBbCcDdEeFfGgHhIiJjKkLlMmNn#OoPpQqRrSsTtUuVvWwXxYyZz0123456789"; // caractères possibles dans le mot de passe
    $longueurMax = strlen($caract);// On cherche à obtenir le nombre de caractères dans la chaîne précédent 
    $i = 0;// initialiser le compteur
    $mdp = sha1(rand()); // prendre un caractère aléatoire

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $_POST['email'])){
      $passage_ligne = "\r\n";
    }
    else {
      $passage_ligne = "\n";
    }
    //Création boudary pour mail
    $boundary = "-----=".md5(rand());
    //Création header pour mail
    $header = "From: noreply@tradeheaven.com".$passage_ligne;
    $header .= "MIME-Version: 1.0".$passage_ligne;
    $header .= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

    // On retourne le mot de passe généré aléatoirement
    $datas = ['email' => $_POST['email'] , 'password' => sha1($mdp), 'pseudo' =>$_POST['pseudo'], 'role' => 'user'];
    Users::getInstance()->add($datas);
    mail($_POST['email'], 'Mot de passe - Trade Heaven', 'Votre mot de passe est :' . $mdp, $header);
    redirect('/');
    
  }

}


  public function resetError() {
    // Erreurs Inscription
    $_SESSION['errorVide'] = false;
    $_SESSION['errorEmail'] = false;
    $_SESSION['pseudoInvalide'] = false;
    $_SESSION['pseudoCourt'] = false;
    $_SESSION['errorAge'] = false;
    $_SESSION['pseudoexist'] = false;
    $_SESSION['mailexist'] = false;
    // Erreurs Connexion
    $_SESSION['deactive'] = false;
    $_SESSION['error'] = false;
  }



}

