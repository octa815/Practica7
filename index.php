<?php


$request_uri = $_SERVER['REQUEST_URI'];

// Enrutar
switch ($request_uri) {
    case '/daw/':
        include ('controller/index.php');
        break;
    case '/daw/accesibilidad.php':
        include ('controller/accesibilidad.php');
        break;
    case '/daw/buscar.php':
        include ('controller/buscar.php');
        break; 
    case '/daw/crear_album.php':
        include ('controller/crear_album.php');
        break; 
    case '/daw/detalle.php':
        include ('controller/detalle.php');
        break;
    case '/daw/detalle.php':
        include ('controller/detalle.php');
        break;
    case '/daw/index2.php':
        include ('controller/index2.php');
        break;
    case '/daw/mensaje_error.php':
        include ('controller/mensaje_error.php');
        break;
    case '/daw/resultado.php?titulo=&fecha1=&fecha2=&pais=':
        include ('controller/resultado.php');
        break;  
    case '/daw/respuesta_solicitar_album.php?nombre=&titulo=&texto_ad=&correo=&direccion=&numero=&cp=&telefono=&color_portada=%23000000&copias=&numFotos=&res=150&fecha1=':
        include ('controller/respuesta_solicitar_album.php');
        break;  
    case '/daw/solicitar_album.php':
        include ('controller/solicitar_album.php');
        break; 
    
    // Añadir más rutas según sea necesario
    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Página no encontrada';
        break;
}
?>