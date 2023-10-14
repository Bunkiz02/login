<?php

$servername = "localhost";
$username ="root";
$password ="";
$dbname = "resgister_db";



$conn = mysqli_connect($servername, $username ,$password, $dbname);

if(!$conn){
    die("connection failed!!".msqli_connect_error());

}

?>