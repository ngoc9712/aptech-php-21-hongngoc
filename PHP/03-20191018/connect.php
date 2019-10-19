<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Connect</title>
</head>
<body>
<?php 
$serverName = "127.0.0.1";
$userName ="root";
$password = "";
// Create connection
$conn = mysqli_connect($serverName,$userName,$password);

//Check connection
if(!$conn) {
        die("Connection failed : ". mysqli_connect_error());
}
echo "Connection successfully";
?>  
</body>
</html>
