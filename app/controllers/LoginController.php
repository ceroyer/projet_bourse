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
      if (!isset($_SESSION['err'])){ // Création Variable error
        $_SESSION['err'] = false; // contient "faux"
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

      ['error' => $_SESSION['error'],'deactive' => $_SESSION['deactive'],'err' => $_SESSION['err'], 'errorAge' => $_SESSION['errorAge'], 'pseudoexist' => $_SESSION['pseudoexist'], 'mailexist' => $_SESSION['mailexist']]);
       LoginController::resetError();

    }
  }

  public function login(){
    global $blade;
    $logins = Users::getInstance()->getAll();
    if(!empty($_POST['password']) AND !empty($_POST['login'])){ // Si champs pas vides
      $loginconnect = str_replace(' ', '-', $_POST['login']); // Recuppération login sans caractères spéciaux
      $loginconnect = preg_replace('#[^A-Za-z0-9]+#', '', $loginconnect);
      $passwordconnect = sha1($_POST['password']); // Conversion en Sha1
      foreach ($logins as $login) {
          if ($login['pseudo'] == $loginconnect AND $login['password'] == $passwordconnect) {    // Si pseudo & mdp correct
            $desactive = $login['active'];
            if($desactive == 1) {
                $_SESSION['deactive'] = true;
                redirect('/');
            } else {
              $_SESSION['login']=$login['pseudo'];
              $_SESSION['id']=$login['id'];
              redirect('/stats');
              break;
            }
         }
      }
    }
    else{
      $_SESSION['error'] = true;
      redirect('/');
    }

      redirect('/'); // Afficher message erreur 'Pseudo ou mdp incorrects'
      LoginController::resetError();
      
      $loginconnect=null;
      $passwordconnect=null;
}

  public function signup(){
    // Verif pseudo déjà existant dans bdd
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $users = Users::getInstance()->getAll();
    
    foreach ($users as $user ) {
      if($pseudo === $user['pseudo']){
        $_SESSION['pseudoexist'] = true;
        $pseudoexist = true;
      }
    }
    foreach ($users as $user ) {
      if($email === $user['email']){
        $_SESSION['mailexist'] = true;
        $mailexist = true;
      }
    }

    if ($_SESSION['pseudoexist'] === true) {
      redirect('/#information');
      //LoginController::resetError();
    }
    elseif ($_SESSION['mailexist'] === true) {
      redirect('/#information');
      //LoginController::resetError();
    }

    else {
      global $blade;
      //récupérer le serveur utilisé en cours
      date_default_timezone_get();
      // date du jour
      $currentDateTmp = date('d-m-Y', time());
      $currentDate = date_create($currentDateTmp);
      //date de naissance de l'utilisateur;
      $age = date_create($_POST['jour'] . '-' . $_POST['mois'] . '-' . $_POST['annee']);
      $controlAge = date_diff( $age , $currentDate );

      //test age
      if ($controlAge->y <18) {
        $_SESSION['errorAge'] = true;
        echo $blade->render(
          'login', // appel de la view
          ['err' => $_SESSION['err'], 'error' => $_SESSION['error'],'deactive' =>  $_SESSION['deactive'], 'errorAge' => $_SESSION['errorAge']]);
        LoginController::resetError();
      }
      else{
        //teste si mail a forme correcte + champs pleins + mails identiques
        if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['emailverif']) AND $_POST['email'] == $_POST['emailverif'] AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ // Si champs pas vides
          
          $longueur = 10; // Définition de la taille du mot de passe aléatoire
          
          $mdp=""; // On initialise la variable $mdp
          
          $caract = "AaBbCcDdEeFfGgHhIiJjKkLlMmNn#OoPpQqRrSsTtUuVvWwXxYyZz0123456789"; // Je définie les caractères possibles dans le mot de passe
          
          $longueurMax = strlen($caract);// On cherche à obtenir le nombre de caractères dans la chaîne précédent et nous utiliserons plus tard
          
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
          redirect('/#information');
          LoginController::resetError();
        }
        else {
          $_SESSION['err'] = true;
          redirect('/#information');
           /*echo $blade->render(
          'login', // appel de la view
          ['err' => $_SESSION['err'], 'error' => $_SESSION['error'],'deactive' =>  $_SESSION['deactive'], 'errorAge' => $_SESSION['errorAge']]);*/
          //LoginController::resetError();
        }
      }
    }
  }


  public function resetError() {
    $_SESSION['err'] = false;
    $_SESSION['deactive'] = false;
    $_SESSION['error'] = false;
    $_SESSION['errorAge'] = false;
    $_SESSION['pseudoexist'] = false;
    $_SESSION['mailexist'] = false;


  }




/*
  public function loginPage(){
    global $blade;
    if(isset($_SESSION['login'])){
    // s'il est bien login, index sinon redirigé pour se login

      $tilesList = Tile::getInstance()->getAll();
      echo $blade->render(
        'VUEAPPLI',
        [

        ]
      );

    }else{
      echo $blade->render(
        'VUEPRINCIPALE',
        [

        ]
      );
    }
  }*/
// }

}

