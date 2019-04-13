<?php

$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "Commercial";


$conn =mysqli_connect($servername,$username,$password,$dbname );

//if($conn){echo "connexion success from server ";}

if(!$conn)  {die("connexion failed".mysqli_connect_error());}

?>