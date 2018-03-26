<?php
namespace Models;

class Actions extends Base{
	protected $tableName = TABLE_PREFIX . 'actions';
  	private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    	self::$instance = new Actions();
  	}
  	return self::$instance;
  }


/*
	public static function searchSBF120($ISIN){ //avec récup des différents champs de la table (haut, bas, ouverture, fermeture)
		$sql = "SELECT ISIN, haut, bas, ouverture, fermeture AS action FROM ".$this->tableName." WHERE ISIN = ".$ISIN;
		$search = $this->pdo->row($sql);
    return $search;
	}
*/
/*
	public static function insertSBF120($nom,$ISIN,$cours,$variation,$volume,$indice){
		$sql = "INSERT INTO ".$this->tableName."(nom, ISIN,	cours,	variation, volume,	indice) VALUES('".$nom."','".$ISIN."','".$cours."','".$variation."','".$volume."','".$indice."')";
		$data = $this->pdo->insert($sql);
	}
*/

/*
	public static function updateSBF120($calcul, $ISIN, $cours, $variation, $volume, $crete, $indice){
		if($calcul == "High"){
			$sql  = "UPDATE ".$this->tableName." SET cours='".$cours."' , variation='".$variation."' , volume='".$volume."' , haut='".$crete."' WHERE ISIN= '".$ISIN."'";
		}
		elseif($calcul == "Low"){
			$sql  = "UPDATE ".$this->tableName." SET cours='".$cours."' , variation='".$variation."' , volume='".$volume."' , bas='".$crete."' WHERE ISIN= '".$ISIN."'";
		}
		else{
			$sql  = "UPDATE ".$this->tableName." SET cours='".$cours."' , variation='".$variation."' , volume='".$volume."' WHERE ISIN= '".$ISIN."'";
		}
		$list = $this->pdo->insert($sql);
	}
*/
/*
	public static function createTable($ISIN){
		$create = $dbh->prepare("CREATE TABLE `action_".$ISIN."` `Last` decimal(60,0) NOT NULL, `Volume` decimal(60,0) NOT NULL, `TChange` decimal(60,0) NOT NULL, `Date` date NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=latin1");
		$data = $this->pdo->createActionTable($sql);
	}
*/
	public static function insertTable($ISIN, $type, $cours, $volume, $haut, $bas, $ouverture, $fermeture){
		$sql = "INSERT INTO action_".$ISIN."(type, cours,	volume,	haut, bas, ouverture, fermeture, date) VALUES('".$type."','".$cours."','".$volume."','".$haut."','".$bas."','".$ouverture."','".$fermeture."', NOW() )";
		$data = $this->pdo->insert($sql);
	}

	public static function searchTable($ISIN){ //avec récup des différents champs de la table (haut, bas, ouverture, fermeture)
		$sql = "SELECT COUNT(TABLE_NAME) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME LIKE 'action_".$ISIN."'";
		$search = $this->pdo->single($sql);
    return $search;
	}

}
?>
