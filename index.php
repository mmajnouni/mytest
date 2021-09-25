<?php
$url =  $_SERVER['QUERY_STRING'];
require '../Core/Router.php';
$router = new Router();
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts',['controller' => 'Posts', 'action' => 'index']);
//$router->add('post/new',['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');

echo "<pre>";
//echo var_dump($router->getRoutes());
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo "</pre>";

if ($router->match($url)) {
	var_dump($router->showmatch());
} else{
	echo "No route found for: " . $url;
}
//add comments



 echo get_class($router);
?>