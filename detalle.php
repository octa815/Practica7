<?php    
    require_once('cabecera.php');
?>

<?php

    include "controller/detalle.php";

?>

    <main>
        <section id="detalle-foto">
            <h2>Detalle de la Foto</h2>
            <?php
                include "view/detalle.php";
            ?>
        </section>
    </main>
<!--************************************************************************************-->
<?php    
    require_once('inicio.php');
?>
<!--************************************************************************************-->
<?php    
  require_once('pie.php');
?>