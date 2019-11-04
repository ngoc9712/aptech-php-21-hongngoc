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
//  Create Database
//  $sql = "CREATE DATABASE ap_21_4";
//  if(mysqli_query($conn , $sql)) {
//      echo "Database create successfully";

//  }
//  else {
//      echo "Error creating database: ". mysqli_error($conn);
//  }
//  Create Table
 $sql = "CREATE TABLE ap_21_4.users (
    id INT,
    email varchar(255),
    password varchar(10)
    )";
$sql = "CREATE TABLE ap_21_4.role(
    id_ro INT,
    name varchar(50) )";
     if (mysqli_query($conn,$sql)){
        echo "TAO BANG THANH CONG";
    } else {
        echo "Error " ;
    }
$sql = "INSERT INTO ap_21_4.role (id_ro, name)
VALUES (1,'Admin'),
        (2,'User'),
        (3,'Guest')";
$sql  = "INSERT INTO ap_21_4.users ( id,Email,password)
VALUES (1,'nngoc6215@gmail.com',1234),
       (2,'nngoc123@gmail.com',1234),
       (3,'nngoc0009@gmail.com',1234),
       (4,'nngoc244@gmail.com',1234),
       (5,'nngoc245@gmail.com',1234)";

if (mysqli_query($conn,$sql)){
    echo "New records created successfully";
} else {
    echo "Error " ;
}
$conn->close();
?>