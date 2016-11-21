<?php
/**
 * Created by PhpStorm.
 */

date_default_timezone_set('America/Los_Angeles');
// LOCAL
define('ENV', 'local');

// LIVE
//define('ENV', 'production');

// Local database settings
if(ENV == 'local')
{
    $db_host = 'localhost';
    $db_port = '5432';
    $db_name = 'base';
    $db_username = 'postgres';
    $db_password = 'kylepass';
}
// Live database settings
else
{
    $db_host = 'localhost';
    $db_port = '5432';
    $db_name = 'base';
    $db_username = 'postgres';
    $db_password = 'kylepass';
}