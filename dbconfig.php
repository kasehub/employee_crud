<?php 
$dbserver='localhost';
$dbusername='root';
$dbpassword='';
$dbname='employees_db';

$mysqli= new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
if($mysqli->connect_error){
    die('Connection Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
?>