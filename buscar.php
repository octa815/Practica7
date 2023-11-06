<?php
    require_once('cabecera.php');
?>
    <main id="formulario-busqueda">
        <fieldset>
            <legend>Realizar una búsqueda de fotos</legend>
            <form action="resultado.php" method="get">
                <p>
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo">
                </p>
                <p>
                    <label for="fecha1">Fecha desde:</label>
                    <input type="text" id="fecha" name="fecha1" placeholder="aaaa-mm-dd">
                    <label for="fecha2"> hasta:</label>
                    <input type="text" id="fecha2" name="fecha2" placeholder="aaaa-mm-dd">
                </p>
                <p>
                    <label for="country">País:</label>
                    <input type="text" id="country" name="pais">
                </p>
                <aside id="boton">
                    <button type="submit">Buscar</button>
                </aside>
            </form>
        </fieldset>
    </main>
 <!--************************************************************************************-->
<?php
    require_once('inicio.php');
?>
<!--************************************************************************************-->
    
<?php
    require_once('pie.php');
?>
