<?php
require_once("./view/cabecera_privada.php");
?>
    <main> 
        <section id="seccion">
            <h2>Resultado de solicitud de impresión de álbum </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus perferendis atque ipsum provident dolorem! Eius enim unde ea veniam eum nihil commodi quod itaque quaerat ipsum! Debitis quibusdam enim aliquid.</p>
        </section>
            <div>
                <fieldset>
                <legend>Confirmación de Solicitud</legend>
                <p>Gracias por solicitar un álbum. A continuación, se muestran los datos que has proporcionado:</p>
                <p>Nombre: <strong> Don Pedro Tablones</strong></p>
                <p>Título del álbum: <strong>El increíble viaje por la playa de murcia</strong></p>
                <p>Texto adicional: <strong>Dedicado a todo el mundo que haya podido observar la playa de murcia</strong></p>
                <p>Correo electrónico: <strong>pedro.cortatablones@gmail.com></strong></p>
                <p>Dirección: <strong>Calle Murcia</strong></p>
                <p>Número: <strong>99</strong></p>
                <p>CP: <strong>30001</strong></p>
                <p>Localidad: <strong>Tobarra</strong></p>
                <p>Provincia: <strong>Murcia</strong></p>
                <p>Teléfono: <strong>666 666 666</strong></p>
                            
                <p>Color de portada: <input type="color" id="color_portada" name="color_portada" value="#000000" disabled></p>
                <p>Número de copias: <strong>1</strong></p>
                <p>Resolución de impresión: <strong>900</strong></p>
                <p>Álbum de SUNEGAMI: <strong>Álbum 1</strong></p>
                <p>Fecha de recepción: <strong>32/3/2079</strong></p>
                <p>Impresión a color: <strong>Si</strong></p>
                <p id="Coste"><strong>Coste del álbum: $99.00</strong></p>
                <p id="infoResultado">Recibirás un correo electrónico de confirmación con más detalles. Gracias por elegir nuestros servicios.</p>
            </fieldset>
        </div>
    </main>
<?php    
    require_once('./view/pie.php');
?>
