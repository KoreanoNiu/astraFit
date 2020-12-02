<?php
    //include 'fb-init.php';

    unset($_SESSION["id_usuario"]);
    unset($_SESSION['access_token']);
    session_destroy();
    header('location: index.php');
?>