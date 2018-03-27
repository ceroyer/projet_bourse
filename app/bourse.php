<?php
use  Models\Actions;

// Calling function to fetch Market datas
getBourse();

/*
* Create persistant datas in array
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
     $persistent[$index]['DateTime']= date("Y-m-d H:i:s",date_timestamp_get(date_create_from_format('d/m/Y H:i:s',$array['Date/Time']))); //dump($persistent[$index]['DateTime']);die();
     $persistent[$index]['Timezone']= $array['Time zone'];
     $index++;
   }
   return $persistent;
 }

 /*
 * High/Low comparison
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
* Insert / update datas
*/

function insert($data){

  // get permanent records from $data
  $records = persistentArray($data);

  //recover json dictionnary
  $json = file_get_contents('app/dictionnaire.json');
  $dictionnary = json_decode($json);

  foreach ($records as $action) {
    $result = Actions::getInstance()->getAction($action['ISIN']);

    $action['stockIndex']= $dictionnary->$action['ISIN'];
	
    if(empty($result)){
      // add action line on main table
      $datas = ['Name'=>$action['Name'],'ISIN'=>$action['ISIN'], 'Market'=>$action['Market'], 'lastCourse'=>$action['Last'], 'Variation'=>$action['Change'], 'Volume'=>$action['Volume'], 'High'=>$action['Last'], 'Low'=>$action['Last'], 'DateTime'=>$action['DateTime'], 'Timezone'=>$action['Timezone'], 'stockIndex'=> $action['stockIndex']];
      Actions::getInstance()->add($datas);
    }
    else{
      // comparison of high/low values on last action value
      $calcul = calculBourse($result['High'], $result['Low'], $action['Last']);
    	if($calcul == "High"){
        $datas = ['lastCourse'=>$action['Last'],'Variation'=>$action['Change'], 'Volume'=>$action['Volume'], 'High'=>$action['Last'], 'DateTime'=>$action['DateTime'], 'Timezone'=>$action['Timezone'],'stockIndex'=> $action['stockIndex']];
    	}
    	elseif($calcul == "Low"){
    		$datas = ['lastCourse'=>$action['Last'],'Variation'=>$action['Change'], 'Volume'=>$action['Volume'], 'Low'=>$action['Last'], 'DateTime'=>$action['DateTime'], 'Timezone'=>$action['Timezone'],'stockIndex'=> $action['stockIndex']];
    	}
    	else{
    		$datas = ['lastCourse'=>$action['Last'],'Variation'=>$action['Change'], 'Volume'=>$action['Volume'], 'DateTime'=>$action['DateTime'], 'Timezone'=>$action['Timezone'],'stockIndex'=> $action['stockIndex']];
    	}
    	Actions::getInstance()->editAction($action['ISIN'],$datas);
    }
  }
}

/*
* Fetch Market flow
*/

function getBourse() {
  // Random to avoid same number and refresh CSV datas
  $random = rand(0,3);
  $url = 'https://connect.euronext.com/nyx_eu_listings/performer/download?typefile=csv&layout=vertical&typedate=dmy&separator=point&mic=XPAR&isin=FR0003502079&since=Yesterday&market=Paris&capitalization=&belongs_to=FR0003999481%2CXPAR%2C&eligibility=all&icb_sector=&filename='.$random.'';

  // Define CSV file (adress)
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

  // Turn copied CSV file into data Array
  $csv = array_map('str_getcsv', file($fichier));
  array_shift($csv);
  array_walk($csv, function(&$a) use ($csv) {
    $a = array_combine($csv[0], $a);
  });
  array_shift($csv);

  //dump($csv);die();
  // Insert values / update (daytime)
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
