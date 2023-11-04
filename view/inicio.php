<aside contenteditable="false">
        <aside id="login" class="modal" >
            <form action="index2.php" class="modal-content animate" name="loginForm">
                <section id="seccion">
                <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
                <fieldset>  
                    <legend>DATOS DE ACCESO</legend>  
                    <h3> INICIAR SESIÓN </h3>                        
                            <p>
                                <label for="nombre">Nombre: </label>
                                <input type="text" id="nombre" name="nombre">
                                <span id="errorNombreUsuario" class="error"></span>
                            </p>
                            <p>
                                <label for="pass">Contraseña: </label>
                                <input type="text" id="pass" name="pass">
                                <span id="errorPass" class="error"></span>
                            </p>
                        
                        <button type="submit">Inicar sesión</button>
                        <button type="reset">borrar</button>
                        <p>
                            <label><input type="checkbox" checked="checked" name="remember"> Recordar</label>
                        </p>
                        <p>
                            <span class="psw">Olvidaste tu<a href="#">contraseña?</a></span>
                        </p>
                </fieldset>  
                </section>
            </form> 
        </aside>
    </aside>
    <!--************************************************************************************-->
    <aside contenteditable="false">
        <aside id="registro" class="modal2">
            <form action="index.php" class="modal2-content animate" name="registroForm">
                <section id="seccion2">
                    <fieldset>  
                        <legend>TUS DATOS</legend>  
                        <h3> REGISTRO </h3>
                            <p>Introduce tus datos</p>
                            <p><label for="nombre_reg">Nombre:</label>
                                <input type="text" id="nombre_reg" name="nombre_reg">
                                <span id="errorNombre_reg" class="error"></span>
                            </p>
                            <p>
                                <label>Apellidos: </label>
                                <input type="text" id="apellidos" name="apellidos" >
                            </p>
                            <p>
                                <label for="pass_reg">Contraseña: </label>
                                <input type="text"  id="pass_reg" name="pass_reg" >
                                <span id="errorPass_reg" class="error"></span>
                            </p>
                            <p>
                                <label for="pass2"> Repite contraseña: </label>
                                <input type="text"  id="pass2" name="pass2">
                                <span id="errorPass2" class="error"></span>
                            </p>
                            <p><label for="email_reg">Email: </label>
                                <input type="text" id="email_reg" name="email_reg" >
                                <span id="errorMail_reg" class="error"></span>
                                <span id="errorEMail_reg" class="error"></span>
                            </p>
                            <p>Sexo:
                                <input type="radio" id="masculino" name="sexo" > 
                                <label for="masculino">H</label>
                                <input type="radio" id="femenino"  name="sexo"> 
                                <label for="femenino">M</label>
                                <span id="errorSexo_reg" class="error"></span>
                            </p>
                            <p>
                                <label for="fecha1">Fecha de nacimiento:</label>
                                <input type="text" id="fecha1" placeholder="aaaa-mm-dd" name="fecha1">
                                <span id="errorFecha_reg" class="error"></span>
                                <span id="errorNac_reg" class="error"></span>
                            </p>
                            <p>
                                <label for="ciudad">Ciudad: </label>
                                <select id="ciudad" name="ciudad">
                                    <option value="1">Alicante</option>
                                    <option value="33">Madrid</option>
                                    <option value="40">Valencia</option>
                                </select>
                            </p>
                            <p><label for="pais">País: </label>
                                <select id="pais" name="pais">
                                    <option value="1">Alemania</option>
                                    <option value="33">España</option>
                                    <option value="40">Francia</option>
                                </select>
                            </p> 
                    </fieldset>   
                </section>
                <section id="foto">
                    <span onclick="document.getElementById('registro').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <fieldset>   
                        <legend>TU FOTO</legend> 
                            <h4>Foto:</h4>
                            <label for="input-image"></label> 
                                <figure>
                                    <img src="./imagenes/user1.jpg" alt="imagen">
                                </figure> 
                            <input type="file" accept="image/jpg, image/png, image/gif, image/jpeg" id="input-image">
                    </fieldset> 
                    <aside id="log">
                        <button type="submit">Registrarse</button>
                        <button type="reset">Borrar</button>
                    </aside>       
                </section> 
            </form> 
        </aside>
    </aside>