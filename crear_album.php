<?php
require_once("cabecera_privada.php");
?>
    <main>
        <h1>ÁLBUM</h1>
        <form action="crea_album">
            <fieldset>  
            <legend>CREA TU ÁLBUM</legend>  
                    <h3> Nombra y describe tu álbum de fotos </h3>                        
                        <p>
                            <label for="nombre">Nombre: </label>
                            <input type="text" id="nombre" name="nombre">
                            <span id="errorNombreUsuario" class="error"></span>
                        </p>
                        <p>
                            <label for="descripción">Descripción: </label>
                            <textarea id="desc" name="desc" placeholder="Deidcatoria o descripción" maxlength="4000"></textarea>
                            <span id="errorPass" class="error"></span>
                        </p>        
                    <button type="submit">Crear álbum</button>
                    <button type="reset">borrar</button>    
            </fieldset> 
        </form> 
    </main>
<?php
require_once("pie.php");
?>