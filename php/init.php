<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bdlogin');
//function conect
$con = mysqli_connect("localhost","root","","bdlogin");

//erros 
ini_set('display_errors', true);
error_reporting(E_ALL);
require_once 'functions.php';
?>