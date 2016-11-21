<?php
/**
 * Created by PhpStorm.
 * Gets called when user hits login button
 */
//$userTable = new UserTable();

$username = $app->request->post('username');
$password = $app->request->post('password');

//encrypt the password before checking
$encryptedPassword = md5($password);

//function returns user data if the user  and password exist else false
//$user = $userTable->readItemByEmailPass($username, $encryptedPassword);
$user = "default";
$redirectUrl = $app->urlFor('dashboard');

// remove user password before assigning it to $_SESSION
//$user['password'] = '';
$_SESSION['loggedInUser'] = $user;

$app->redirect($redirectUrl);
