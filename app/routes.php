<?php
//$route->addRoute( 'METHOD'  , 'LIEN' , 'CHEMIN ACCES' );




// Route pour connexion
$route->addRoute( 'GET'  , '/login' , 'LoginController@index' );
$route->addRoute( 'POST' , '/login' , 'LoginController@login' );


?>

