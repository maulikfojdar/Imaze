<?php
if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

//ini_set('display_errors', 'On');
//ob_start("ob_gzhandler");
//error_reporting(E_ALL);


// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'imaze11';


// since all page will require a database access
// and the common library is also used by all
// it's logical to load these library here
require_once 'database.php';
require_once 'common.php';

?>