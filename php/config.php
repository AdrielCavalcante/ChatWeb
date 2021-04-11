<?php
    $server = "localhost";
    $user = "root";
    $Password = "";        
    $databaseName = "chatApp";

    $conn = mysqli_connect($server,$user,$Password,$databaseName);
    if (!$conn) {
        echo "Error: ".mysqli_connect_error();
    }

?>