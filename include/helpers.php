<?php
/**
 * Created by PhpStorm.
 */

/**
 * This writes out a JSON response for sending JSON data back to caller.
 *
 * @param $app \Slim\Slim
 * @param $content Array
 */

function sendJsonResponse($app, $content)
{
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody( json_encode($content) );
    $app->stop();
}

/**
 * @param $date
 * @param string $format
 * @return bool
 */
function validateDate($date, $format = 'm-d-Y H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

/**
 * @param $app
 */
function send403Response($app)
{
    $app->response->setStatus(403);
    $app->response->headers->set('Content-Type', 'text/plain');
    $app->response->setBody('{"error":"403: You made a Forbidden request."}');
    $app->stop();
}

function send404Response($app)
{
    $app->response->setStatus(404);
    $app->response->headers->set('Content-Type', 'text/plain');
    $app->response->setBody('{"error":"404: Page Not Found"}');
    $app->stop();
}

function send200Response($app)
{
    $app->response->setStatus(200);
    $app->response->headers->set('Content-Type', 'text/plain');
    $app->response->setBody("200 OK");

}