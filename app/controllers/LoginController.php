<?php

namespace Controllers;
use Models\Tile;
use Models\Admin;
use Controllers\Controller;
use Models\UsersDAO;

class LoginController extends Controller{

  // Accès page de connexion
  public function index(){
    
      
  }

  //
  public function loginPage(){
        if (isset($_SESSION['login']))  //Lorsque l'utilisateur est deja connecté
          {
            redirect('/stats'); // Accès à l'espace connecté
          }

        else { // Si pas connecté affichage de l'espace connexion
          global $blade;
          $logins = UsersDAO::getInstance()->getList();
          echo $blade->render(
          'login', // appel de la view
          [
            
          ]);
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
}

}

