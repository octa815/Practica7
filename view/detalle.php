            <?php
                echo <<<hereDOC
                <figure>
                    <img src="$rutaFoto" alt="Foto Seleccionada">
                    <figcaption>$titulo</figcaption>
                </figure>
               
                    <fieldset>
                    <legend>Álbum de Fotos
                    </legend>
                    <h3>Álbum de Foto</h3>
                    <p class="icon-calendar">Fecha: $fecha</p>
                    <p class="icon-globe">País: $pais</p>
                    <p class="icon-user-circle-o">Usuario: Nombre de Usuario</p>
                    </fieldset>
                hereDOC;
            ?>