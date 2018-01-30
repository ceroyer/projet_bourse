<?php
//$route->addRoute( 'METHOD'  , 'LIEN' , 'CHEMIN ACCES' );
$route->addRoute( 'GET'  , '/' ,         'IndexController@index' );
$route->addRoute( 'GET'  , '/bo' ,       'BoController@index' );
$route->addRoute( 'GET'  , '/profile' ,  'IndexController@profile' );
$route->addRoute( 'GET'  , '/stats' ,    'IndexController@stats' );


?>

