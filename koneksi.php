<?php
    // filename: koneksi.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db_name);
    
    // Check connection
    if($conn == false) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>