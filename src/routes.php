<?php

// Routes

$app->get('/[{controller}[/{action}[/{id}]]]', function ($request, $response, $args) {
$loader = new Twig_Loader_Filesystem( __DIR__ . '/../views');
$twig = new Twig_Environment($loader); 
if(!isset($args['controller']))
$args['controller'] = 'root';
if(!isset($args['action']))
$args['action'] = 'index';
$args['pagePath'] = join(DIRECTORY_SEPARATOR,  ['pages', $args['controller'] == 'root' ? null : $args['controller'], $args['action']]) . '.html';

try{
return $twig->render('/layouts/site.layout.html', $args); 
}
catch(Exception $e){   
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);


return $twig->render('pages/404.html', []); 
}

});
