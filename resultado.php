<?php
require_once("cabecera.php");
?>
    <main>
        <section id="resultados-busqueda">
            <h2>Resultados de la búsqueda</h2>
            <aside>
                <figure>
                    <h4 title="Foto 2">Foto 1</h4>
                    <a href="detalle.php"><img src="./imagenes/muradin.jpg" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>User</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                            <a href="detalle.html" id="btnResultado1">Ver detalle</a>
                        </fieldset> 
                    </footer>
                </figure>
                <figure>
                    <h4 title="titulo foto 2">Foto 2</h4>
                    <a href="detalle.php"><img src="./imagenes/gorra.png" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>User</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                            <a href="detalle.html" id="btnResultado1">Ver detalle</a>
                        </fieldset> 
                    </footer>
                </figure>
            </aside>   
        </section>
    </main>
<?php    
    require_once('pie.php');
?>