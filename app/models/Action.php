<?php

namespace Models;

//


class Action extends Base{
  protected $tableName = TABLE_PREFIX . 'Actions';

  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    self::$instance = new Action();
  }
  return self::$instance;
  }
}
?>
