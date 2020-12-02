<?php
    //include 'fb-init.php';
    session_destroy();
    unset($_SESSION["id_usuario"]);
    unset($_SESSION['access_token']);
    header('location: index.php');
?>