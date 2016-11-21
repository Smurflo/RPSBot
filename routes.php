<?php

//Pages
$app->get('/', function() use ($app) {
    $app->render('home.php');
})->name('home');

$app->post('/login(/)', function() use ($app) {
    require_once './controllers/login.php' ;
} )->name('login');

$app->get('/logout', function() use ($app) {
    session_destroy();
    unset($_SESSION['loggedInUser']);
    $app->redirect($app->urlFor('home'));
});

$app->get('/page1(/)', function() use ($app) {
    $app->render('page1.php', array('page' => 'page1'));
})->name('page1');

$app->get('/page2(/)', function() use ($app) {
    $app->render('page2.php', array('page' => 'page2'));
})->name('page2');

$app->get('/page3(/)', function() use ($app) {
    $app->render('page3.php', array('page' => 'page3'));
})->name('page3');


// Pages for logged in users.
$app->group('/dashboard', function() use ($app) {
    $app->get('(/)', function() use ($app) {
        $app->render('dashboard.php', array('page' => 'dashboard'));
    })->name('dashboard');
});