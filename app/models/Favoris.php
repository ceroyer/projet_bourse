<?php

namespace Models;

class Favoris extends Base{

  protected $tableName = TABLE_PREFIX . 'favoris';
  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    	self::$instance = new Favoris();
  	}
  	return self::$instance;
  }

  public function getMyActions($id){
    $sql = "SELECT Name, ISIN, Market, Last, Volume, ActChange, DateTime, Timezone, isin_action, `favoris`.id AS favid
    FROM actions
    LEFT OUTER JOIN favoris ON `favoris`.isin_action = `actions`.ISIN
    UNION
    SELECT Name, ISIN, Market, Last, Volume, ActChange, DateTime, Timezone, isin_action, `favoris`.id AS favid
    FROM actions
    RIGHT OUTER JOIN favoris ON `favoris`.isin_action = `actions`.ISIN
    WHERE `favoris`.id_user = :id";
    $sth = $this->pdo->prepare( $sql );
    $sth->bindValue(':id', $id );
    // var_dump($id);
    $sth->execute();
    return $sth->fetchAll( \PDO::FETCH_ASSOC);
  }
// SELECT nom, ISIN, cours, variation, ouverture, fermeture, volume, haut, bas, indice, id_actions
// FROM favoris
// LEFT JOIN actions ON `favoris`.id_actions = `actions`.id
//
// UNION
//
// SELECT nom, ISIN, cours, variation, ouverture, fermeture, volume, haut, bas, indice, id_actions
// FROM favoris
// RIGHT JOIN actions ON `favoris`.id_actions = `actions`.id
// WHERE `favoris`.id_user = 3

//
//   if(is_numeric($myAction['id_actions'])){
//     echo '☆';
// }


}
?>
