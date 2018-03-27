<?php
namespace Controllers;

/**
 *
 */
class Bourse extends Controller
{

  public function getAll(){
    $test = array(array('nom' => 'max', 'isin' => 1988,'ouverture' => 4122,'fermeture' => 8100, 'bas' => 123, 'haut' => 874 ),array('nom' => 'sam', 'isin' => 1988,'ouverture' => 4122,'fermeture' => 8100, 'bas' => 123, 'haut' => 874  ));
    $data = json_encode($test);
    echo $data;
  }
}


?>
