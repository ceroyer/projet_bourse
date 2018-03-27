<?php

require_once 'config/config.php';

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.'';
$user = DB_USER;
$password = DB_PASSWORD;

getAll_daily_save($dsn,$user,$password);

function getAll_daily_save($a,$b,$c) {
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

    if ($table === false) {
      create_daily_save($data,$a,$b,$c);
    }
    else {
      insert($data,$a,$b,$c);
    }
  }
}

function create_daily_save($data,$a,$b,$c) {
  $pdo = new PDO($a, $b, $c);
  $sql = "CREATE TABLE ".$data['Name']." (date DATE, ISIN VARCHAR(12), High DECIMAL(10,3), Low DECIMAL(10,3)); INSERT INTO ".$data['Name']." (date, ISIN, High, Low) VALUES (CURDATE(), '".$data['ISIN']."', ".$data['High'].", ".$data['Low'].")";
  $sth = $pdo->prepare($sql);
  return $sth->execute();
}

function insert($data,$a,$b,$c) {
  $pdo = new PDO($a, $b, $c);
  $sql = "INSERT INTO ".$data['Name']." (date, ISIN, High, Low) VALUES (CURDATE(), '".$data['ISIN']."', ".$data['High'].", ".$data['Low'].")";
  $sth = $pdo->prepare($sql);
  return $sth->execute();
}


?>
