<?php
    $serverName = "localhost";
    $userName = "root";
    $pwd = "";
    $nameDB = "";

    $conn = mysqli_connect($serverName, $userName, $pwd,$nameDB);
    
    if ($conn === false){
        echo "kết nối thất bại";
    }
?>  