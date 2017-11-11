<!DOCTYPE html>
<html lang="en">
<?php

date_default_timezone_set("America/New_York");

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app['debug']=true;

use ABS\Classes\ModelClass as ModelClass;
use ABS\Classes\ControllerClass as ControllerClass;

$model = new ModelClass();
$controller= new ControllerClass($model);

if (isset($_GET['action']))
{
	$controller->{$_GET['action']}();
}

$app->register(new Silex\Provider\TwigServiceProvider(), array( 
		'twig.path' => __DIR__.'/views',
	));

$app->get('/', function () use ($app, $model) {
	return $app['twig']->render($model->page, []);
});

$app->run();

?>
</html>

<!-- php Desktop/PHP/AnthonyBarrettiSiteSILEX/index.php -->