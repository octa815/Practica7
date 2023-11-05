<!DOCTYPE html>
<html lang="es">
<head>
    <title>Álbumnes de fotos Sunegami</title>
    <meta name="description" content="Crea tus propios albumnes de fotos"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagenes/sunegamilogo.png">
    <link rel="stylesheet" href="estilo.css"media="screen" title="Modo principal">
    
   <!--Letra accesible-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
   
   <!-- Modos de la página -->
   <link rel="alternate stylesheet" href="estilo-oscuro.css" title="Modo oscuro">
   <link rel="alternate stylesheet" href="estilo-grande.css" title="Modo grande">
   <link rel="alternate stylesheet" href="estilo-accesible.css" title="Modo accesible">
   <link rel="alternate stylesheet" href="alto-contraste.css" title="Modo alto contraste">
   <link rel="alternate stylesheet" href="estilo-grande+vision.css" title="Modo grande+vision">
    
    <link rel="stylesheet" href ="impresion.css" media="print">
    <link rel="stylesheet" href ="fontello/css/fontello.css">
    <script src="javas.js"></script>
    <title>Página Inicio-SUNEGAMI</title>
</head>
<body>
    <header>
        <a href="index2.php"><img src="./imagenes/sunegamilogo.png" alt="logo"></a>
        <form id="botbus">
            <button type="submit" class="icon-search"></button>
            <input type="search" class="busqueda">  
        </form>
        <aside>
            <figure>
                <button class="mipanel" onclick=openNav()><img src="./imagenes/knekro1.png" alt="user" id="user"></button>
            </figure> 
            <aside id="panel" class="lateral">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <figure>
                    <img src="./imagenes/knekro1.png" alt="usu" id="usuario">
                    <figcaption class="icon-user-circle-o">Usuario: Knekro</figcaption>
                </figure>
                <a href="index2.php" class="icon-doc-text">Mis datos</a>
                <a href="index2.php" class="icon-folder-open-empty-1">Mis álbumes</a>
                <a href="crear_album.php" class="icon-folder-add">Crear álbum</a>
                <a href="solicitar_album.php" class="icon-edit">Solicitar álbum</a>
                <a href="./" class="icon-trash-empty">Darme de baja</a>
                <a href="./" class="icon-logout">Cerrar sesión</a>  
                <aside class="botoncillo">
                    <a class="icon-moon">Claro/oscuro</a>
                      <aside class="darkbot">
                        <label class="switch">
                            <input type="checkbox" onclick="oscuro()">
                            <span class="slider round"></span>
                        </label> 
                    </aside> 
                </aside>
                <aside class="botoncillo">
                    <a class="icon-fontsize">Tamaño</a>
                    <aside class="darkbot">
                        <label class="switch">
                            <input type="checkbox" onclick="grande()">
                            <span class="slider round"></span>
                        </label> 
                    </aside> 
                </aside>
            </aside>             
        </aside> 
        <nav id="menu"> 
            <label for="chkMenu">&equiv;</label>
            <input type="checkbox" id="chkMenu">
            <ul>
                <li><a href="index2.php" class="icon-home"><span>Inicio</span></a></li>
                <li><a href="buscar.php" class="icon-search"><span>Buscar</span></a></li>
                <li><a href="solicitar_album.php" class="icon-doc-add"><span>Solictar álbum</span></a></li>
                <li><a href="./" class="icon-logout"><span>Cerrar sesión</span></a></li>                  
            </ul>   
        </nav>   
    </header>