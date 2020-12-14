<?php 
    if(isset($_POST['nombre'])){
        $data = [
            "nombre" => $_POST['nombre'],
            "asunto" => $_POST['asunto'],
            "email" => $_POST['email'],
            "mensaje" => $_POST['mensaje'],
        ];

        $to = ''. $data['email'] .'';
        $subject = '' . $data['asunto'] . '';
        $message = 'Disculpamos que nos reportes un problema: ' . $data['nombre'] .  "\r\n" . 'Nos pondremos en contacto lo más pronto posible. ¡Un gusto trabajar para ti!' . "\r\n";
        $message .= 'De: ' . 'robocharley.lego@gmail' .  "\r\n";
        $message .= 'Asunto: ' . $data['asunto']  . "\r\n";
        $message .= 'Mensaje: ' . $data['mensaje']  . "\r\n" ;
        $message .= 'Para: ' . $data['email'] . "\r\n";
        $headers = "From: robocharley.lego@gmail.com";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        mail($to, $subject, $message, $headers);

        $data = [
            "error" => ''
        ];

        echo json_encode($data);

    }else{
        header('location: contacto.php');
    }

?>