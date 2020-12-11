<?php
    session_start();    
    
    if (isset($_SESSION['rol']) && $_SESSION['rol'] != 'admin') {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang = es>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "src/css/styles.css" type ="TEXT/CSS">
        <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
        <title>Registrar Coach</title>
    </head>

    <body>
        <?php include_once('php/handlebars/header.php')?>
        <main>
            <section class="register-container">
                <div class="form-container">
                    <div class="status-bar">
                        <div style="width: -0%"></div>
                    </div>
                    <div class="form-content">
                        <header>
                            <h1>Registra un nuevo Coach</h1>
                        </header>
                        <form class="inline-form-text" autocomplete="on" id="registerCoachForm">
                            <div>
                                <label for="FotoPerfil">
                                    <p>Foto de perfil del Coach</p>
                                    <div class="img-profile-coach">
                                        <img id="vistaPrevia" src="users/perfil-image/user-default.png">
                                    </div>
                                    <div class="next" id="seleccionarFotoPerfil">
                                        <label for="seleccionarFotoPerfil">Seleccionar foto de perfil</label>
                                    </div>
                                    <input type="file" name="photo-coach" id="PhotoProfileCoach" value = "../users/perfil-image/user-default.png" accept=".jpg,.png, .jfif">
                                </label>
                            </div>
                            <div>
                                <label for="Nombre">
                                    <p>Nombre</p>
                                </label>
                                <div>
                                    <input type="text" name="nombre" id="Nombre" required min="">
                                </div>
                            </div>
                            <div>
                                <label for="email">
                                    <p>Correo electrónico</p>
                                </label>
                                <div>
                                    <input type="text" name="email" id="email" pattern="[0-9]+(\.[0-9]*)?" required min="">
                                </div>
                            </div>
                            <div>
                                <label for="contrasena">
                                    <p>Contraseña</p>
                                </label>
                                <div>
                                    <input type="password" name="contrasena" id="contrasena" pattern="[0-9]+(\.[0-9]*)?" required min="">
                                </div>
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <label for="Genero">
                                    <p>Genero</p>
                                </label>
                                <div class="selectFull">
                                    <select name="Genero" id="Genero">
                                        <option value="femenino">Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <label for="tipoCoach">
                                    <p>Tipo de Coach</p>
                                </label>
                                <div class="selectFull">
                                    <select name="tipoCoach" id="tipoCoach">
                                        <option value="Entrenador">Entrenador</option>
                                        <option value="Nutriologo">Nutriologo</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="Descripcion">
                                    <p>Descripción</p>
                                </label>
                                <div>
                                    <textarea type="text" name="Descripcion" id="Descripcion" required></textarea>
                                </div>
                            </div>
                            <div class="next buttonLabel" id="validarDatosCuenta">
                                <label for="validarDatosCuenta">Registrar</label>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide sucessblack">
                        <h1>¡INICIANDO SESIÓN!</h1>
                        <h3>Serás direccionado a tu progeso...</h3>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script src="src/js/registro-coach.js"></script>
    <script src="src/js/photo-profile.js"></script>
    <script src ="src/js/commun.js"></script>
</html>