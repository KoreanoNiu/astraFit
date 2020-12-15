<?php if (!isset($_SESSION['idUsuario'])) {
    header('location: '. dirname("/handlebars/") . 'astraFit/index.php' . $directorio . '');
}?>
<header class="right main-header">
    <div class="full-menu">
        <div class="menu-container">
            <h3>Bienvenido, <?php echo $_SESSION['nombreUsuario']?> <br>¿Listo para entrenar?</h3>
            <form class="img-perfil-container" onsubmit="return false" id="ProfilePhotoForm">
                <img src="<?php 
                
                if (isset($_SESSION['srcFotoPerfil']) && $_SESSION['srcFotoPerfil'] != '' && !isset($_SESSION['access_token']) && !isset($_SESSION['access_tokenStrava'])) {
                    echo substr($_SESSION['srcFotoPerfil'], 3);
                }else if (isset($_SESSION['access_token']) || isset($_SESSION['access_tokenStrava'])){
                    echo $_SESSION['srcFotoPerfil'];
                } else{
                    $url = $funcionesDB->obtenerFotoDePerfil($conexion, $_SESSION['idUsuario']);

                    $_SESSION['srcFotoPerfil'] = $url[0]['srcFotoPerfil'];
                    echo substr($_SESSION['srcFotoPerfil'], 3);
                }?>
                "class="img-perfil">
                <?php if(!isset($_SESSION['access_token']) && !isset($_SESSION['access_tokenStrava'])){
                    echo '<div class="buttonImg" id="changeProfilePhoto">
                            <label for="changePhoto">Cambiar foto de perfil</label>
                        </div>
                        <input type="file" name="image-perfil" id="fotoPerfil" accept=".jpg,.png,.jfif">';
                }?>
            </form>
            <ul class="">
                <li><a href="miprogreso.php">MI CUENTA</a></li>
                <li><a href="entrenamiento.php">ENTRENAMIENTO</a></li>
                <li><a href="calculadora.php">NUTRICIÓN</a></li>
                <li><a href="motivaciones.php">MOTIVACIÓN</a></li>
                <li><a href="blockNotas.php">MIS NOTAS</a></li>
                <li><a href="cerrarSesion.php">CERRAR SESIÓN</a></li>
                <?php if ($_SESSION['rol'] == 'admin') {
                    echo '<li><a href="registroCoaches.php" class="show-on-small-and-down">REGISTRAR COACHES</a></li>';
                }?>
            </ul>
        </div>
    </div>
    <nav>
        <div class="trigger show">
            <svg class="bars" viewBox="0 0 100 100" onclick="this.classList.toggle('active');document.querySelector('.full-menu').classList.toggle('opened');">
                <path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272"></path>
                <path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272"></path>
                <path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272"></path>
            </svg>

        </div>
        <ul class="hide-on-small-and-down horizontal white">
            <li><a href="index.php">INICIO</a></li>
            <li><a href="miprogreso.php">MI CUENTA</a></li>
            <li><a href="entrenamiento.php">ENTRENAMIENTO</a></li>
            <li><a href="calculadora.php">NUTRICIÓN</a></li>
            <li><a href="motivaciones.php">MOTIVACIÓN</a></li>
            <li><a href="blockNotas.php">MIS NOTAS</a></li>
            <?php if ($_SESSION['rol'] == 'admin') {
                echo '<li><a href="registroCoaches.php">REGISTRAR COACHES</a></li>';
            }?>
        </ul>
    </nav>
</header>