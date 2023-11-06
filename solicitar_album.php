<?php
require_once("cabecera_privada.php");
?>
    <main id="mainalbum">
        <section id="intro">
            <h2> Solicitud de impresión de álbum </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus perferendis atque ipsum provident dolorem! Eius enim unde ea veniam eum nihil commodi quod itaque quaerat ipsum! Debitis quibusdam enim aliquid.</p>
        </section>
        <fieldset id="tarifas">
            <legend>Tarifas</legend>
            <table>
                <!--<caption>Tarifas</caption>-->
                    <tr>
                        <th scope="col">Concepto</th>
                        <th scope="col">Tarifa</th>  
                    </tr>
                    <tr>
                        <td>&lt; 5 páginas</td>
                        <td>0.10 € por pág.</td>
                    </tr>
                    <tr>
                        <td>entre 5 y 11 páginas</td>
                        <td>0.08 € por pág.</td>
                    </tr>
                    <tr>
                        <td>> 11 páginas</td>
                        <td>0.07 € por pág.</td>
                    </tr>
                    <tr>
                        <td>Blanco y negro</td>
                        <td>0 € por pág.</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>0.05 € por foto</td>
                    </tr>
                    <tr>
                        <td>Resolución > 300 dpi</td>
                        <td>0.02 € por foto</td>
                    </tr>    
            </table>
            <h2>Costo del Álbum</h2>        
            <p>El costo total del álbum basado en los valores ingresados es:</p>
            <p id="costo">Costo Total: 0 €</p>
            <p>
                <input type="button" value="añadir" id="agregar" onclick="anyadir()" /> 
            </p>
            <p>
                <input type="button" value="borrar" id="borrar" onclick="borrar()" /> 
            </p>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Número paginas</th>
                        <th scope="col">Número fotos</th>  
                        <th colspan="2">color ?</th>
                        <th colspan="2">resolucion dpi</th>
                        <th scope="col">COSTE TOTAL</th>
                    </tr>
                </thead>  
            </table>
            <p id="mitabla">

            </p> 
        </fieldset>
        <fieldset id="formulario">
            <legend>Formulario de solicitud</legend>
            <form action="respuesta_solicitar_album.php">
                <aside id="izq">
                    <p>
                        <label for="nombre">Nombre: </label>
                        <input type="text" id="nombre" name="nombre" maxlength="200" placeholder="Nombre" >(*)
                    </p>
                    <p>
                        <label for="titulo">Titulo del album: </label>
                        <input type="text" id="titulo" name="titulo" maxlength="200" placeholder="Cubierta" >(*)
                    </p>
                    <p>
                        <label for="texto_ad">Texto adicional: </label>
                        <textarea id="texto_ad" name="texto_ad" placeholder="Deidcatoria o descripción" maxlength="4000"></textarea>
                    </p> 
                    <p>
                        <label for="correo">Correo electrónico: </label>
                        <input type="email" id="correo" name="correo" maxlength="200" placeholder="email@email" >
                    </p>
                    <p>
                        <label for="direccion">Dirección: </label>
                        <input type="text" id="direccion" name="direccion" placeholder="Calle" >
                    
                        <label for="numero">Numero: </label> 
                        <input type="text" id="numero" name="numero" placeholder="Número" size="3" >
                    
                        <label for="cp">CP: </label>
                        <input type="text" id="cp" name="cp" maxlength="5" placeholder="CP" size="6" >
                    
                        <label for="ciudad">Ciudad </label>
                        <select id="ciudad" name="ciudad">
                            <option value="" disabled selected hidden>Localidad</option>
                            <option value="1">Alicante</option>
                            <option value="33">Madrid</option>
                            <option value="40">Valencia</option>
                        </select>
                    
                        <label for="provincia">Provincia </label>
                            <select id="provincia" name="provincia">
                                <option value="" disabled selected hidden>Provincia</option>
                                <option value="1">Valencia</option>
                                <option value="33">murcia</option>
                                <option value="40">Andalucia</option>
                            </select>(*)
                        </p>
                </aside>
                <aside id="der">
                    <p>
                        <label for="telefono">Telefono: </label>
                        <input type="tel" id="telefono" name="telefono" placeholder="### ## ## ##" >
                    </p>  
                    <p>
                        <label for="color_portada">Color de portada:</label>
                        <input type="color" id="color_portada" name="color_portada" value="#000000">
                    </p>
                    <p>
                        <label for="copias">Número de copias (entre 1 y 99)</label>
                        <input type="number" id="copias" name="copias" min="1" max="99">
                    </p> 
                    <p>
                        <label for="copias">Número de fotos (entre 1 y 99)</label>
                        <input type="number" id="numFotos" name="numFotos" min="1" max="99">
                    </p> 
                    <p>
                        <label for="res">Resolución de impresión: </label>
                        <input type="range" id="res" name="res" min="150" max="900" step="150" value="150" onchange="document.getElementById('outres').value=value" list="tickmarks">
                        <output id="outres" name="outres" for="res">150</output>
    
                        <datalist id = "tickmarks">
                            <option value="150"></option>
                            <option value="300"></option>
                            <option value="450"></option>
                            <option value="600"></option>
                            <option value="750"></option>
                            <option value="900"></option>
                        </datalist>
                    </p>  
                    <p>
                        <label for="album">Album de SUNEGAMI: </label>
                        <select id="album" name="album">
                            <option value="" disabled selected hidden>Álbumes</option>
                            <option value="1">Álbum 1</option>
                            <option value="33">Álbum 2</option>
                            <option value="40">Álbum 3</option>
                        </select>
                        (*)
                    </p> 
                    <p>
                        <label for="fecha1">Fecha de recepción:</label>
                        <input type="date" id="fecha1" name="fecha1"> Fecha aproximada de recepción
                    </p>
                    <p>
                        <label for="impresion">Impresión a color?: </label>
                        <input type="checkbox" id="impresion" name="impresion">
                    </p>    
                    <input type="submit" value="Enviar !" id="env">        
                </aside>
            </form>  
        </fieldset>     
    </main>
<?php    
    require_once('pie.php');
?>
