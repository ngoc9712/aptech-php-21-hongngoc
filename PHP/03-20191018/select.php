<?php
    $serverName = "127.0.0.1";
    $userName ="root";
    $password = "";
    $dbname = "ap_21_4";

    $conn = mysqli_connect($serverName,$userName,$password,$dbname);
    
    //Check connection
    if(!$conn) {
            die("Connection failed");
    }
    $sql = "SELECT*  FROM ap_21_4.users";

    $ketqua = mysqli_query($conn, $sql);

    if (mysqli_num_rows($ketqua) > 0){
        //output data of each row
        while ($row = mysqli_fetch_assoc($ketqua)) {
            echo "id : " . $row["id"]. $row["email"]. $row["password"]. "<br>";
        }

    }else {
        echo "0 ketqua";
    }
    mysqli_close($conn);
?> 