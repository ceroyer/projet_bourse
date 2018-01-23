<?php

namespace Controllers;


class UserController extends Controller{

  function checkLogin(){
    global $blade;
    echo $blade->render(
      'index',
      [

      ]
    );
  }

  function userAddSave(){

  }

}

