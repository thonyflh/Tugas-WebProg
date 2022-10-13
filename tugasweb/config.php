<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "tugasweb";

$conf = mysqli_connect($server, $db_username, $db_password, $database);
if($conf->connect_error){
    die("Connection failed: ".$conf->connect_error);
}
?>