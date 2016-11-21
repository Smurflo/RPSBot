<?php
/**
 * Created by PhpStorm.
 *
 * can call this in routes.php just do something like
 *  $app->get('/page1', $authenticate($app), function() use ($app) { ... }
 */

// Basic auth check.  Tag this on any routes that shouldn't be open to everyone
$authenticate = function ($app) {
    // If not logged in, redirect to the home page
    return function () use ($app) {
        if(empty($_SESSION['loggedInUser']))
        {
            $app->flash('error', 'Login is required.');
            $app->redirect($app->urlFor('home'));
        }
    };
};