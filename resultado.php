<?php
require_once("cabecera.php");
?>
    <main>
        <section id="resultados-busqueda">
            <h2>Resultados de la búsqueda</h2>

            <?php
            // Accede a los valores de búsqueda desde $_GET
            $titulo = $_GET['titulo'];
            $fecha1 = $_GET['fecha1'];
            $fecha2 = $_GET['fecha2'];
            $pais = $_GET['pais'];

            // Muestra los valores de búsqueda en la página
            echo "<p>Búsqueda realizada con los siguientes criterios:</p>";
            echo "<ul>";
            echo "<li>Título: $titulo</li>";
            echo "<li>Fecha desde: $fecha1</li>";
            echo "<li>Fecha hasta: $fecha2</li>";
            echo "<li>País: $pais</li>";
            echo "</ul>";

            $i = 1;


            ?>
            
            <aside>
                <figure>
                <?php
                    echo <<<hereDOC
                    <h4 title="titulo foto 2">$titulo</h4>
                    <a href="detalle.php?id=$i&$titulo&$fecha1&$pais"><img src="./imagenes/muradin.jpg" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>User</legend>
                            <p class="icon-globe">$pais</p>
                            <p class="icon-calendar">Fecha: $fecha1</p>
                            <a href="detalle.html" id="btnResultado1">Ver detalle</a>
                        </fieldset> 
                    </footer>
                    hereDOC;
                ?>
                </figure>
            
                <figure>
                <?php
                    $i++;
                    echo <<<hereDOC
                    <h4 title="titulo foto 2">$titulo</h4>
                    <a href="detalle.php?id=$i&$titulo&$fecha2&$pais"><img src="./imagenes/gorra.png" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>User</legend>
                            <p class="icon-globe">$pais</p>
                            <p class="icon-calendar">Fecha: $fecha2</p>
                            <a href="detalle.html" id="btnResultado1">Ver detalle</a>
                        </fieldset> 
                    </footer>
                    hereDOC;
                ?>
                </figure>
            </aside>

            
        </section>
    </main>
<?php    
    require_once('pie.php');
?>