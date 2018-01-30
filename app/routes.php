<?php
$route->addRoute( 'GET'  , '/' ,         'LoginController@loginPage' );
$route->addRoute( 'GET'  , '/bo' ,       'IndexController@backofficeIndex' );
$route->addRoute( 'GET'  , '/profile' ,  'IndexController@editProfile' );
$route->addRoute( 'GET'  , '/stats' ,    'IndexController@connectedPage' );

// Route appelée quand on valide l'un des deux formulaires
$route->addRoute( 'POST' , '/login' , 'LoginController@login' );
$route->addRoute( 'POST' , '/signup' , 'LoginController@signup' );
?>
