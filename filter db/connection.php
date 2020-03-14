<?php
   
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="online_test";

    $conn=mysqli_connect($serverName,$userName,$password,$dbName);
    if($conn)
    {
      // echo "connected";
    }
    else
    {
        echo "connection failed".mysqli_connect_error();
    }
?>