<?php
    require_once("cabecera_privada.php");
?>
    <main>
        <section id="principal">
            <h3> FOTO PRINCIPAL </h3>
            <article>
                <h4 title="Foto1">Foto1</h4>               
                <a href="detalle.php">
                    <img src="./imagenes/gorra.png" alt="imagen" class="imagenes">
                    <img src="./imagenes/muradin.jpg" alt="imagen" class="imagenes">
                    <img src="./imagenes/horda.jpg" alt="imagen" class="imagenes">
                </a>
                <footer>
                    <fieldset>
                        <legend>User</legend>
                        <p class="icon-male">País</p>
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
                    <a href="detalle.php"><img src="./imagenes/muradin.jpg" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>User</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
                <figure>
                    <h4 title="Foto 3">Foto 3</h4>
                    <a href="detalle.php"><img src="./imagenes/gorra.png" alt="imagen"></a>
                    <footer>
                        <fieldset>
                            <legend>User</legend>
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
                            <legend>User</legend>
                            <p class="icon-globe">País</p>
                            <p class="icon-calendar">Fecha: 2023-09-25</p>
                        </fieldset> 
                    </footer>
                </figure>
            </aside>   
        </section>
    </main>
    <script>
        scroll();
    </script> 
<?php
require_once ("pie.php")
?>