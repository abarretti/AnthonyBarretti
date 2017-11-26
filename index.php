<?php

date_default_timezone_set("America/New_York");

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app['debug']=true;

$url= 'http://'.$_SERVER['SERVER_NAME'];

$app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/views',
    ));

$app->get('/', function () use ($app, $url) {
    return $app['twig']->render('home.twig', ['url'=>$url]);
});

$app->get('/about', function () use ($app, $url) {
    return $app['twig']->render('about.twig', ['url'=>$url]);
});

$app->get('/cv', function () use ($app, $url) {
    return $app['twig']->render('cv.twig', ['url'=>$url]);
});

$app->get('/contact', function () use ($app, $url) {
    return $app['twig']->render('contact.twig', ['url'=>$url]);
});

$app->run();

// php Desktop/PHP/AnthonyBarrettiSiteSILEX/index.php -->
