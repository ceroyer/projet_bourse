<?php 
namespace Models;

class UsersDAO extends Users{
  protected $tableName = TABLE_PREFIX . 'users';
  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    self::$instance = new UsersDAO();
  }

  return self::$instance;
  }

  /**
   * Retourne tous les utilisateurs.
   * @return array
   */
  public function getList() {

    $sql  = "SELECT id FROM ".$this->tableName;
    $list = $this->pdo->column($sql);
    $result = [];
    foreach ($list as $id){
      $result[] = $this->get($id);
    }
    return $result;
  }

  /**
   * Retourne un utilisateur.
   * @param  integer $id identifiant
   * @return object
   */
  public function get( $id ) {
    $user = new Users( $id );
    $this->get($user);
    return $user;
  }


}

 ?>