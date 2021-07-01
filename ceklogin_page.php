<?php
    session_start();

    $login_url = "http://" . $_SERVER['SERVER_NAME']."/elearning/login.php";

    if(!isset($_SESSION['id_user'])){
        header("Location: ".$login_url."");
        exit();
    }
?>