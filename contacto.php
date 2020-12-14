<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang = es>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "src/css/styles.css" type ="TEXT/CSS">
        <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
        <title>CONTACTO</title>
    </head>

    <body>
        <?php include_once('php/handlebars/header.php')?>
        <main>
            <section class="contact" id="contact">
                <h1>CONTACTO</h1>
                <div class="divisor">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="6" viewBox="0 0 60 6">
                        <rect width="25.594" height="1.5"/>
                        <rect id="Rectangle_1_copy_2" data-name="Rectangle 1 copy 2" x="34.406" width="25.594" height="1.5"/>
                        <rect id="Rectangle_1_copy" data-name="Rectangle 1 copy" x="27" width="6" height="1.5"/>
                        <rect id="Rectangle_1_copy_3" data-name="Rectangle 1 copy 3" x="13.5" y="4.5" width="25.594" height="1.5" rx="0.5" ry="0.5"/>
                        <rect id="Rectangle_1_copy_3-2" data-name="Rectangle 1 copy 3" x="40.5" y="4.5" width="6" height="1.5" rx="0.5" ry="0.5"/>
                      </svg>
                </div>
                <form class="contact-container" onsubmit="enviarFormulario(); return false" method="POST">
                    <input name="nombre"type="text" placeholder="Nombre" required>
                    <input name="asunto"type="text" placeholder="Asunto" required>
                    <input name="email"type="email" placeholder="Correo electrónico" required>
                    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                    <button type="submit" class="enviar">
                        ENVIAR
                        <img src="src/img/paper-plane.svg" alt="">
                    </button>
                </form>
            </section>
            <?php include_once('php/handlebars/footer.php'); ?>
        </main>
        <?php include_once('php/handlebars/error.php'); ?>
    </body>
    <script src="src/js/contact.js"></script>
    <script src="src/js/photo-profile.js"></script>
    <script src ="src/js/commun.js"></script>
</html>