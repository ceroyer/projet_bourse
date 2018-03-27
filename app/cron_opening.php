<?php

require_once 'config/config.php';

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.'';
$user = DB_USER;
$password = DB_PASSWORD;

Opening($dsn,$user,$password);

function Opening($a,$b,$c) {
  $pdo = new PDO($a, $b, $c);
  $sql = "SELECT * FROM actions";
  $sth = $pdo->prepare($sql);
  $sth->execute();
  $datas = $sth->fetchAll();

  foreach ($datas as $data) {
    $sql = "SHOW TABLES FROM ".DB_NAME." LIKE '".$data['Name']."'";
    $req = $pdo->prepare($sql);
    $req->execute();
    $table = $req->fetch();

    if ($table !== false) {
      $closing = get_datas($data,$a,$b,$c);
      var_dump($closing);
      insert($closing,$data,$a,$b,$c);
    }
  }
}

function get_datas($data,$a,$b,$c) {
  $pdo = new PDO($a, $b, $c);
  $sql = "SELECT Closing FROM `".$data['Name']."` WHERE Date = CURDATE() - 1";
  $sth = $pdo->prepare($sql);
  return $sth->execute();
}

function insert($closing,$data,$a,$b,$c) {
  $pdo = new PDO($a, $b, $c);
  $sql = "INSERT INTO Opening VALUES (".$closing.") ".$data['Name']."WHERE Date = CURDATE()";
  $sth = $pdo->prepare($sql);
  return $sth->execute();
}


?>
