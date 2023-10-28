function scroll(){
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("imagenes");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
  }
}

function login(){
  var modal = document.getElementById('login');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}

function registro(){
  var modal2 = document.getElementById('registro');

  window.onclick = function(event) {
    if (event.target == modal2) {
      modal2.style.display = "none";
    }
  }
}


function openNav() {
  document.getElementById("panel").style.width = "250px";
}
  
function closeNav() {
  document.getElementById("panel").style.width = "0";
}

function oscuro() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

function grande() {
  var element = document.body;
  element.classList.toggle("grande-mode");
}
  
/*---------------FUNCIONES FORMULARIOS Y TABLA---------------------*/


/*VALIDAR LOGIN-----------------------------------------------------*/
function validaLogin(event) {
  
  var ok = true;
  var msg = "Debes escribir algo en los campos:\n";
  var nombre = document.getElementsByName('loginForm')[0].nombre.value;
  var pass = document.getElementsByName('loginForm')[0].pass.value;


  /*ERRORES ONLINE*/
  var errorNombre = document.getElementById('errorNombreUsuario');
  var errorPass = document.getElementById('errorPass');

  if (nombre == "") {
    errorNombre.textContent='el usuario es erroneo';
    ok = false;
  }else{
    errorNombre.textContent='';
  }

  if (pass == "") {
    errorPass.textContent='necesitas introducir password';
    ok = false;
  }else{
    errorPass.textContent='';
  }

  if (ok == false) {
    event.preventDefault();
  } else {
    alert("Todo correcto, se envía el formulario");
  }
}
/*VALIDAR REGISTRO-----------------------------------------------*/

function validaRegistro(event) {
  
  var ok = true;

  var nombre = document.getElementsByName('registroForm')[0].nombre_reg.value;
  var pass = document.getElementsByName('registroForm')[0].pass_reg.value;
  var rep_pass = document.getElementsByName('registroForm')[0].pass2.value;
  var email = document.getElementsByName('registroForm')[0].email_reg.value;
  var hombre = document.getElementById('masculino').checked;
  var mujer = document.getElementById('femenino').checked;
  var email = document.getElementsByName('registroForm')[0].email_reg.value;
  var fecha = document.getElementsByName('registroForm')[0].fecha1.value;

  
/*VALIDACIONES*/

  var val_nombre = /^[a-zA-Z][a-zA-Z0-9]{2,14}$/;
  var val_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,15}$/;
  var val_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var val_fecha = /^\d{4}-\d{2}-\d{2}$/; //FORMATO FECHA

  var errorNombre = document.getElementById('errorNombre_reg');
  var errorPass = document.getElementById('errorPass_reg');
  var errorPass2 = document.getElementById('errorPass2');
  var errorMail = document.getElementById('errorMail_reg');
  var errorSexo = document.getElementById('errorSexo_reg');
  var errorFecha = document.getElementById('errorFecha_reg');
  var errorNac = document.getElementById('errorNac_reg');

  if(!val_nombre.test(nombre)){
    errorNombre.textContent='necesitas introducir nombre';
    ok = false;
  }else{
    errorNombre.textContent='';
  }

  if (!val_pass.test(pass) ) {
    errorPass.textContent='necesitas introducir password';
    ok = false;
  }else{
    errorPass.textContent='';
  }

  if (rep_pass != pass ) {
    errorPass2.textContent='no coicide con contraseña';
    ok = false;
  }else{
    errorPass2.textContent='';
  }

  if (!val_email.test(email) ) {
    errorMail.textContent='necesitas introducir mail';
    ok = false;
  }else{
    errorMail.textContent='';
  }

  if (!hombre && !mujer) {
    errorSexo.textContent = 'Por favor, selecciona un sexo.';
    ok = false;
  } else {
    errorSexo.textContent = '';
  }

  

  if (!val_fecha.test(fecha)) {
    errorFecha.textContent = 'Formato fecha incorrecto';
    ok = false;
  }else {
    errorFecha.textContent = '';
  }

  var fechaActual = new Date();        //fecha de hoy
  var fechaNac = new Date(fecha);     //fecha nacimiento
  var edad = fechaActual.getFullYear() - fechaNac.getFullYear();
  console.log(edad);
  console.log(fechaActual.getFullYear());
  console.log(fechaNac.getFullYear());

  if (fechaActual.getMonth() < fechaNac.getMonth() || (fechaActual.getMonth() == fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())) {
    edad--;
  }

  if (edad < 18) {
    errorNac.textContent = 'Debes tener al menos 18 años para registrarte.';
    ok = false;
  } else {
    errorNac.textContent = '';
  }
 
  if (ok == false) {
    event.preventDefault();
  } else {
    alert("Todo correcto, se envía el formulario");
  }
}


function load() {
  document.getElementsByName('loginForm')[0].addEventListener("submit", validaLogin);
  document.getElementsByName('registroForm')[0].addEventListener("submit", validaRegistro);
}


document.addEventListener("DOMContentLoaded", load, false);