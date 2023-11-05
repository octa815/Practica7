
<?php    
    require_once('./view/cabecera.php');
?>
    <main>
        <section id="principal">
            <h3> FOTO PRINCIPAL </h3>
            <article>
                <h4 title="No registrado">Esta foto es un ejemplo de usuario no registrado</h4>               
                <a href="mensaje_error.php">
                    <img src="./imagenes/gorra.png" alt="imagen" class="imagenes ">
                    <img src="./imagenes/muradin.jpg" alt="imagen" class="imagenes ">
                    <img src="./imagenes/horda.jpg" alt="imagen" class="imagenes ">
                    <img src="./imagenes/taj.jpeg" alt="imagen" class="imagenes ">
                    <img src="./imagenes/dia4.jpg" alt="imagen" class="imagenes">
                    <img src="./imagenes/images.jpg" alt="imagen" class="imagenes">
                </a>
                <footer>
                    <fieldset>
                        <legend>Usuario</legend>
                        <p class="icon-globe">País</p>
                        <p class="icon-calendar">Fecha: 2023-09-25</p>
                    </fieldset>  
                </footer>
            </article>
        </section>
        <section id="secundaria">
            <h3> FOTOS secundarias </h3>
            <aside>
                <figure>
                    <h4 title="Foto 2">Foto 2</h4>
                    <a href="detalle.php"><img src="./imagenes/gorra.png" title="MenosTrece" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>Usuario</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
                <figure>
                    <h4 title="Foto 3">Foto 3</h4>
                    <a href="detalle.php"><img src="./imagenes/muradin.jpg" title="Murdin" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>Usuario</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
                <figure>
                    <h4 title="Foto 4">Foto 4</h4>
                    <a href="detalle.php"><img src="./imagenes/horda.jpg" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>Usuario</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
                <figure>
                    <h4 title="Foto 2">Foto 2</h4>
                    <a href="mensaje_error.php"><img src="./imagenes/taj.jpeg" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>Usuario</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
                <figure>
                    <h4 title="Foto 2">Foto 2</h4>
                    <a href="mensaje_error.php"><img src="./imagenes/dia4.jpg" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>Usuario</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
                <figure>
                    <h4 title="Foto 2">Foto 2</h4>
                    <a href="mensaje_error.php"><img src="./imagenes/images.jpg" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>Usuario</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
            </aside>
        </section>
    </main>
    <!--************************************************************************************-->
    <?php    
        require_once('./view/inicio.php');
    ?>
    <!--************************************************************************************-->
    <script>
        scroll();
    </script>
<?php    
    require_once('./view/pie.php');
?>
   
   
