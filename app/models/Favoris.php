<?php

namespace Models;

class Favoris extends Base{

  protected $tableName = TABLE_PREFIX . 'users';
  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    	self::$instance = new Favoris();
  	}
  	return self::$instance;
  }

  public function getFavorisOfUser($id){
    $sql = "SELECT * FROM favoris INNER JOIN users ON users.id = `favoris`.id_user INNER JOIN actions ON `actions`.id = `favoris`.id_actions WHERE users.id = :id";
    $sth = $this->pdo->prepare( $sql );
    $sth->bindValue(':id', $id );
    $sth->execute();
    return $sth->fetch( \PDO::FETCH_ASSOC);
  }

}
?>
