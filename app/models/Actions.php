<?php

namespace Models;

class Actions extends Base{
	protected $tableName = TABLE_PREFIX . 'wesh';
  	private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    	self::$instance = new Actions();
  	}
  	return self::$instance;
  }
}
?>
