<footer>
    <div>
        <h3>Productos</h3>
        <ul>
            <li><a href="">ENTRENAMIENTO</a></li>
            <li><a href="">NUTRICIÓN</a> </li>
            <li><a href="">SUPLEMENTOS</a></li>
            <li><a href="">CALCULADORAS</a></li>
        </ul>
    </div>
    <div>
        <h3>Avisos</h3>
        <ul>
            <li><a href="">AVISO DE PRIVACIDAD</a></li>
            <li><a href="">AVISO LEGAL</a></li>
        </ul>
    </div>
    <div>
        <h3>Contacto</h3>
        <ul>
            <li><a href="">QUIENES SOMOS</a></li>
            <li><a href="">PONTE EN CONTACTO CON NOSOTROS</a></li>
        </ul>
    </div>
</footer>
<?php 
    if(!isset($_SESSION['access_token'])){
        echo '<script src="src/js/photo-profile.js"></script>';
    };
?>