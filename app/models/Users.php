<?php

namespace Models;

class Users extends Base{

 protected $tableName = TABLE_PREFIX . 'users';
  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    	self::$instance = new Users();
  	}
  	return self::$instance;
  }

}
?>
