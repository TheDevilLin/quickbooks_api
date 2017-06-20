<?php
/*
 * Configuration for DB
 */
define('DBUSER', 'root');
define('DBPASS', '');
define('HOST', 'localhost');
define('DBNAME', 'exercise');

try
{
    $conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME,DBUSER,DBPASS);
}
catch(PDOException $e)
{
    die('Something wrong, will be back later.');
}

/*
 * Include all model/data
 */

include_once '/../vendor/autoload.php';
include_once '/../classes/User.php';
include_once '/../classes/Quickbooks.php';


$users = new User($conn);

$quickbooks = new Quickbooks();
