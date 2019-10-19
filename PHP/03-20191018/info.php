<?php
include 'login.php';
if(isset($_POST['email'])) {
    $email = $_POST['email'];
}
if(isset($_POST['pass'])) {
    $pass = $_POST['pass'];
}
$sql = "SELECT email, password FROM ap_21_4.users WHERE email='".$email."'";
?>