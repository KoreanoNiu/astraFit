<?php if(isset($_GET['error'])){
                echo '
                <div class="error-msg">
                    <div class="msg-container">
                        <div class="msg">
                            <h2>'. preg_replace("/[^A-Za-z0-9^$|\s+^.^áéíóúÁÉÍÓÚñÑ^:^,]/", '', $_GET['error']) .'</h2>
                        </div>
                        <div class="button-error-msg" onclick="this.parentNode.parentNode.remove();">
                            <label for="button-error-msg">Aceptar</label>
                        </div>
                    </div>
                </div>
                ';
            } 
?>