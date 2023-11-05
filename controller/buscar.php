<?php    
    require_once('./view/cabecera.php');
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
                    <input type="date" id="fecha" name="fecha1">
                    <label for="fecha2"> hasta:</label>
                    <input type="date" id="fecha2" name="fecha2">
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
    require_once('./view/inicio.php');
?>
<!--************************************************************************************-->
    
<?php    
    require_once('./view/pie.php');
?>
