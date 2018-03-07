<?php

namespace Controllers;
use Models\Base;
use Models\Users;



class LoginController extends Controller{

  public function loginPage(){
    if (!isset($_SESSION['err'])){ // Création Variable error
      $_SESSION['err'] = false; // contient "faux"
      }

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

      echo $blade->render(
      'login', // appel de la view
      ['error' => $_SESSION['error'], 'err' => $_SESSION['err'],'deactive' => $_SESSION['deactive']
    ]
      );
    }
  }

  public function login(){

    $logins = Users::getInstance()->getAll();

    if(!empty($_POST['password']) AND !empty($_POST['login'])){ // Si champs pas vides


      $loginconnect = str_replace(' ', '-', $_POST['login']); // Recuppération login sans caractères spéciaux
      $loginconnect = preg_replace('#[^A-Za-z0-9]+#', '', $loginconnect);



      $loginconnect = $_POST['login']; // Récupération des variables

      $passwordconnect = sha1($_POST['password']); // Conversion en Sha1

      foreach ($logins as $login) {

        $_SESSION['deactive']=$login['active'];

        if ($login['pseudo'] == $loginconnect AND $login['password'] == $passwordconnect AND $login['active']== 0) {    // Si pseudo & mdp correct
          $_SESSION['login']=$login['pseudo'];
          $_SESSION['id']=$login['id'];
          redirect('/stats'); // acces aux stats
          break;
        }
      }
      $_POST=null; // Vider les champs & variables
      $loginconnect=null;
      $passwordconnect=null;
      $_SESSION['error'] = true;

      // Message erreur 'Pseudo ou mdp incorrects'

     redirect('/');
    }
    else{
      redirect('/');
        // Afficher message erreur 'Champs vides'
    }

}


  public function signup(){
    global $blade;
    /*
    if (!isset($_SESSION['err'])){
      $_SESSION['err'] = false; //si c'est vide, c'est faux
      }
      //dump($_SESSION['error']);die();
      echo $blade->render(
      'login', // appel de la view
      ['err' => $_SESSION['err']]
      );*/

      //teste si mail a forme correcte + champs pleins + mails identiques
    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['emailverif']) AND $_POST['email'] == $_POST['emailverif'] AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ // Si champs pas vides
        // Définition de la taille du mot de passe aléatoire
        $longueur = 10;
        // On initialise la variable $mdp
        $mdp="";
        // Je définie les caractères possibles dans le mot de passe
        $caract = "AaBbCcDdEeFfGgHhIiJjKkLlMmNn#OoPpQqRrSsTtUuVvWwXxYyZz0123456789";
        // On cherche à obtenir le nombre de caractères dans la chaîne précédent et nous utiliserons plus tard
        $longueurMax = strlen($caract);
        // initialiser le compteur
        $i = 0;
        // ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
        //while ($i < $longueur) {
        // prendre un caractère aléatoire
        $mdp = sha1(rand());
        //}

        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $_POST['email'])){
          $passage_ligne = "\r\n";
        }
        else
        {
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
            }
            else{
              $_SESSION['err'] = true;
               echo $blade->render(
              'login', // appel de la view
             ['err' => $_SESSION['err'], 'error' => $_SESSION['error']
        //'deactive' => $login['active']
    ]
      );
            }
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

