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
      if (!isset($_SESSION['error'])){$_SESSION['error'] = false;} //si c'est vide, c'est faux
      //dump($_SESSION['error']);die();
      echo $blade->render(
      'login', // appel de la view
      ['error' => $_SESSION['error'],]
      );
    }
  }

  public function login(){

    $logins = Users::getInstance()->getAll();


    if(!empty($_POST['password']) AND !empty($_POST['login'])){ // Si champs pas vides

      $loginconnect = $_POST['login']; // Récupération des variables
      $passwordconnect = sha1($_POST['password']); // Conversion en Sha1

      foreach ($logins as $login) {

<<<<<<< HEAD
        if ($login['pseudo'] == $loginconnect AND $login['password'] == $passwordconnect ) {    // Si pseudo & mdp correct

          $_SESSION['login']=$login['pseudo']; //changer pour $login['id'] ?
          redirect('/stats'); // acces aux stats
=======
        if ($login['pseudo'] = $loginconnect AND $login['password'] = $passwordconnect) {    // Si pseudo & mdp correct

          $_SESSION['login']=$login['pseudo'];
          $_SESSION['id']=$login['id'];
          redirect(url('/stats')); // acces aux stats
>>>>>>> 17c433ab6a7686520cba82f83a3722654b252325
        }
        else{
          redirect('/');
<<<<<<< HEAD
          $_POST=null; // Vider les champs & variables
          $loginconnect=null;
          $passwordconnect=null;
          $_SESSION['error'] = true;
=======
          $_POST = null; // Vider les champs & variables
          $loginconnect = null;
          $passwordconnect = null;
>>>>>>> b10d98bff40fc79edbf5f96356331d63332f25b1

          // Message erreur 'Pseudo ou mdp incorrects'
        }
      }
    }
    else{
      redirect('/');
        // Afficher message erreur 'Champs vides'
    }




}


  public function signup(){


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

