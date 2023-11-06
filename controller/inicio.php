<?php


$usuarios_permitidos = array(
    'pepe' => '1234',
    'juan' => '4321',
    'maria' => '6789',
    'ana' => '9876'
);

if(isset($_POST['nombre']) && isset($_POST['pass'])){
    $usuario = $_POST['nombre'];
    $contrasena = $_POST['pass'];

    // Verificar si el usuario y la contraseña son válidos
    if(array_key_exists($usuario, $usuarios_permitidos) && $usuarios_permitidos[$usuario] == $contrasena){
        header('Location: index2.php'); // Redirigir a página de usuario registrado
        exit();
    } else {
        header('Location: mensaje_error.php'); // Redirigir a página principal con mensaje de error
    exit();
    }
}
?>