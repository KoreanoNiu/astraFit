<?php 
    $to = 'm4elpro@gmail.com';
    $subject = 'Asunto de email';
    $message = 'Este es mi primer envio con gmail';
    $headers = "From: robocharley.lego@gmail.com" . "\r\n" . "CC: robocharley.lego@gmail.com";

    try {
        mail($to , $subject , $message , $headers);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo 'xdxd';