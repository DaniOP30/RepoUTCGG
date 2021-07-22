<?php
require 'conexion.php';
if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['inputR']['tmp_name']) && is_uploaded_file($_FILES['inputU']['tmp_name']) && is_uploaded_file($_FILES['inputT']['tmp_name'])) {


        // Creamos las variables de las rutas (Carpetas)
        $rutaR = "Repositorios/";
        $rutaU = "ManualUsuario";
        $rutaT = "ManualTecnico";
        // Rutas en string
        $nombreres = $_FILES['inputR']['name'];
        $rutares = $rutaR . $nombreres . "/";

        $rutaUfinal = $rutares . $rutaU;

        $rutaTfinal = $rutares . $rutaT;

        // Si la carpeta no existe
        if(!file_exists($rutares)){
            mkdir($rutares, 0777, true);

        }

        if(!file_exists($rutaUfinal)){
            mkdir($rutaUfinal, 0777, true);

        }
        if(!file_exists($rutaTfinal)){
            mkdir($rutaTfinal, 0777, true);

        }
        // Variables para mover los archivos a su destino
        $upload = $rutares . $nombreres;

        $nombredos = $_FILES['inputU']['name'];
        $up = $rutaUfinal . "/" . $nombredos;


        $nombretres = $_FILES['inputT']['name'];
        $load = $rutaTfinal .  "/" . $nombretres;


        // VARIABLES FORMULARIO
        $nombre = $_POST["nombreR"];
        $nombre_a = $_POST["nombreA"];
        $descripcion = $_POST["descripcion"];
        $proyecto = $_POST["tipoP"];
        $nivel = $_POST["nivelP"];

        $Bus= explode(".",$nombreres);
        $Ext = strtolower(end($Bus));
       

        $Bus2= explode(".",$nombredos);
        $Ext2 = strtolower(end($Bus2));

        $Bus3= explode(".",$nombretres);
        $Ext3 = strtolower(end($Bus3));

        $PermitirExtAr = array('pdf', 'docx','zip', 'rar');

        
        if (in_array($Ext, $PermitirExtAr) && in_array($Ext2, $PermitirExtAr) && in_array($Ext3, $PermitirExtAr))
        {
            if (
                move_uploaded_file($_FILES['inputR']['tmp_name'], $upload) && move_uploaded_file($_FILES['inputU']['tmp_name'], $up)
                && move_uploaded_file($_FILES['inputT']['tmp_name'], $load)
            ) { //movemos el archivo a su ubicacion 


                $query = "INSERT INTO repositorios (nombre,ruta,nombre_a,descripcion,carrera,tipo_proyecto,nivel_proyecto,nombre_fantasma) 
        VALUES ('$nombre','".$rutares."','$nombre_a','$descripcion','TI','$proyecto','$nivel','$nombreres')";


                mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
                echo "El archivo '".$nombreres."' se ha subido con éxito <br>";

                

                $query2 = "INSERT INTO manual_usu (ruta,id_r,nombre_fantasma) 
        VALUES ('".$rutaUfinal."',1,'$nombredos')";


                mysqli_query($conexion, $query2) or die("Error" . mysqli_error($conexion));
                echo "El archivo '".$nombredos."' se ha subido con éxito <br>";

                $query3 = "INSERT INTO manual_tec (ruta,id_r,nombre_fantasma) 
        VALUES ('".$rutaTfinal."',1,'$nombretres')";


                mysqli_query($conexion, $query3) or die("Error" . mysqli_error($conexion));
                echo "El archivo '".$nombretres."' se ha subido con éxito <br>";
            }
        }else{
            echo "algun archivo no es admitido, solo se permiten archivos pdf y doc";
        }
    }
}


?>