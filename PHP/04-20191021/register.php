<?php
$serverName = "127.0.0.1";
$userName ="root";
$password = "";
// $dbname = "ap_21_4";

// Create connection
$conn = mysqli_connect($serverName, $userName, $password);

//Check connection
if(!$conn){
    die ("Connection failed: " . mysqli_connect_error());
}
echo '<br> Ket noi thanh cong';
//Create Database//
$sql = " CREATE DATABASE ap_21_5";
 if(mysqli_query($conn , $sql)) {
     echo "Database create successfully";

 }
 else {
     echo "Error creating database: ". mysqli_error($conn);
 }
 $sql = " CREATE TABLE roles (
     ID int 
    "