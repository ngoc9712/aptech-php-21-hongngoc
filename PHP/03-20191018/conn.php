<?php 
$serverName = "127.0.0.1";
$userName ="root";
$password = "";
$dbname = "ap_21_4";
// Create connection
$conn = mysqli_connect($serverName,$userName,$password,$dbname);

//Check connection
if(!$conn) {
        die("Connection failed");
}

?>  