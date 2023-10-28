
function init(){

    const boton = document.getElementById('boton');
    boton.onclick = mensaje;
    

    const botonEsp = document.getElementById('botonEsp');
    botonEsp.onclick = mensajeEspecial();

    const textarea = document.getElementById('texto');
    textarea.textContent = 3 * 8 + 44;
    textarea.textContent = `El precio es 3 * 8 + 44 = ${3 * 8 + 44}`;


    const boton_tonto = document.getElementById('boton-tonto');
    boton_tonto.addEventListener('click', validarFormulario);
    // boton_tonto.addEventListener('hover', validarFormulario);



}
window.addEventListener('load', init);

function mensaje(){
    alert('Hola mundo desde una funcion para escribir JS');
}
function mensajeEspecial(){
    return() => {
        alert('Uy,mensaje especial');
    }
}

function validarFormulario(){
    if(document.getElementById('usuario').value == ''){
        alert('Muy mal'); //NO USAR ALERT
    }else{
        const formulario = document.getElementById('formulario');
        formulario.submit();
    }
}