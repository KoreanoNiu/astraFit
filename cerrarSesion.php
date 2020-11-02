<?php 
    session_start();
    $_SESSION["id_usuario"] = "";
    header('location: index.php');
?>