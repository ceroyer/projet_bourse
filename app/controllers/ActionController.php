<?php

namespace Controllers;


class ActionController extends Controller{

  function displayActions(){
    global $blade;
    echo $blade->render(
      'index',
      [

      ]
    );
  }

}

