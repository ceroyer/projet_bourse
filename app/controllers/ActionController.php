<?php

namespace Controllers;


class ActionController extends Controller{

  function home(){
    //echo "hayyy";
    global $blade;
    //$gallery = GalleryDAO::getInstance()->get(1);
    //$tiles = TileDAO::getInstance()->getList();
    //dump($tiles);die();
    echo $blade->render(
      'index',
      [

      ]
    );
  }

}

