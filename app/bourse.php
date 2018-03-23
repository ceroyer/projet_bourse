<?php
use  Models\Actions;

//appel fonction pour récupérer la bourse
getBourse();

/*
* créé un tableau de données persistant
*/

 function persistentArray($array){
   $index=0;
   foreach( $array as $array ){
     $persistent[$index]['Name']= $array['Name'];
     $persistent[$index]['ISIN']= $array['ISIN'];
     $persistent[$index]['Market']= $array['Market'];
     $persistent[$index]['Last']= $array['Last'];
     $persistent[$index]['Volume']= $array['Volume'];
     $persistent[$index]['Change']= $array['Change'];
     $persistent[$index]['Date/Time']= $array['Date/Time'];
     $persistent[$index]['Timezone']= $array['Time zone'];
     $index++;
   }
   return $persistent;
 }

 /*
 * Fait les calculs d'une action
 */

 function calculBourse($oldHigh, $oldLow, $newValue){
   if($oldHigh <= $newValue){
     $high = $newValue;
     return "High";
   }
   elseif($oldLow >= $newValue){
     $low = $newValue;
     return "Low";
   }
 }

/*
* Insère / met à jour les données
*/

function insert($data){

  // get permanent records from $data
  $records = persistentArray($data);

  foreach ($records as $action) {
    $result = Actions::getInstance()->getAction($action['ISIN']);

    if(empty($result)){
      // add action line on main table
      $datas = ['Name'=>$action['Name'],'ISIN'=>$action['ISIN'], 'Market'=>$action['Market'], 'lastCourse'=>$action['Last'], 'Variation'=>$action['Change'], 'Volume'=>$action['Volume'], 'High'=>$action['Last'], 'Low'=>$action['Last'], 'stockIndex'=>40];
      Actions::getInstance()->add($datas);
    }
    else{
      // comparison of high/low values on last action value
      $calcul = calculBourse($result['haut'], $result['bas'], $action['Last']);
    	if($calcul == "High"){
        $datas = ['cours'=>$action['Last'],'variation'=>$action['Change'], 'volume'=>$action['Volume'], 'haut'=>$action['Last']];
    	}
    	elseif($calcul == "Low"){
    		$datas = ['cours'=>$action['Last'],'variation'=>$action['Change'], 'volume'=>$action['Volume'], 'bas'=>$action['Last']];
    	}
    	else{
    		$datas = ['cours'=>$action['Last'],'variation'=>$action['Change'], 'volume'=>$action['Volume']];
    	}
    	Actions::getInstance()->editAction($action['ISIN'],$datas);
    }
  }
}

/*
* Récupère le flux boursier
*/

function getBourse() {
  // Random pour éviter le même nombre aléatoire.
  $random = rand(0,3);
  $url = 'https://connect.euronext.com/nyx_eu_listings/performer/download?typefile=csv&layout=vertical&typedate=dmy&separator=point&mic=XPAR&isin=FR0003502079&since=Yesterday&market=Paris&capitalization=&belongs_to=FR0003999481%2CXPAR%2C&eligibility=all&icb_sector=&filename='.$random.'';

  // Définition du fichier csv (adresse)
  $fichier = './data.csv';

  // Si la copie du fichier vers le serveur ne peut être effectuée
  if(!@copy($url, $fichier)){
    $erreur = error_get_last();
    echo 'Erreur: '.$erreur['message'];
  }

  /* ------------------------------------
  SIGNALEMENT COPIE EFFECTIVE
  else{
    echo 'Le fichier a bien été copié';
    }
  ------------------------------------- */

  // On transforme le fichier csv copié en tableau de valeurs
  $csv = array_map('str_getcsv', file($fichier));
  array_shift($csv);
  array_walk($csv, function(&$a) use ($csv) {
    $a = array_combine($csv[0], $a);
  });
  array_shift($csv);

  //dump($csv);die();
  // Insère les valeurs / met à jour (dans la journée)
  insert($csv);

  /*
  PARTIE CRON :: ne pas oublier de déclarer l'argument time_action dans le getbourse

  if(isset($time_action) && $time_action = "open"){

  }
  // create corresponding table
  Actions::getInstance()->createActionTable($action['ISIN']);
  // insert in corresponding table
  Actions::getInstance()->insertTable($ISIN, $type, $cours, $volume, $haut, $bas, $ouverture, $fermeture);

  NE PAS OUBLIER MAJ OUVERTURE & FERMETURE TABLE PRINCIPALE
  */
}

?>
