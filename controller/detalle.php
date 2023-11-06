<?php

    if (isset($_GET["id"])){

        $id = $_GET["id"];

        if ($id%2 == 0){

            $titulo = "Menos trece";
            $pais = "España";
            $fecha = "2023-09-01";
            $rutaFoto = "./imagenes/gorra.png";

        }else{
            $titulo = "Muradin";
            $pais = "Andorra";
            $fecha = "1780-09-01";
            $rutaFoto = "./imagenes/muradin.jpg";

        }

    }else{

        $msnErr = "Error en los parámtros de entrada";

    }

?>