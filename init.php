<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$username = "root";
$password = "password";
$_SESSION['users'] = 1;
try {
$db = new PDO("mysql: host=127.0.0.1; dbname=todo", $username, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
catch(PDOxception $e) {
	echo "connection failed: " . $e->getMessage();

}
// Handle this in someother way
?>
