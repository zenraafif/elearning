<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIP Home</title>
        <!-- Favicon-->
        <link rel="shortcut icon" type="image/icon" href="assets/imges/favicon.ico"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/7f68d15522.js" crossorigin="anonymous"></script>
        <?php session_start();
        
        ?>
        <?php
            if(!isset($_SESSION["id_user"]) || $_SESSION["role"]=='siswa'){
                exit();
              }
        ?>
    </head>