<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sip_elearning";

    // Create connection
    $conn = mysqli_connect('localhost','root','','sip_elearning');
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>