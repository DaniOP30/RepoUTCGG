<?php
require 'back/conexion.php';
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


        if (
            move_uploaded_file($_FILES['inputR']['tmp_name'], $upload) && move_uploaded_file($_FILES['inputU']['tmp_name'], $up)
            && move_uploaded_file($_FILES['inputT']['tmp_name'], $load)
        ) { //movemos el archivo a su ubicacion 

            echo "<b>Upload exitoso!. Datos:</b><br>";
            echo "Nombre: <i><a href=\"".$rutares. $nombreres."\">".$_FILES['inputR']['name']."</a></i><br>";
            echo "<br><hr><br>";
            echo "<b>Upload exitoso!. Datos:</b><br>";
            echo "Nombre: <i><a href=\"".$rutaUfinal. "/" .$nombredos."\">".$_FILES['inputU']['name']."</a></i><br>";
            echo "<b>Upload exitoso!. Datos:</b><br>";
            echo "Nombre: <i><a href=\"".$rutaTfinal. "/" . $nombretres."\">".$_FILES['inputT']['name']."</a></i><br>";

            $query = "INSERT INTO repositorios (nombre,ruta,nombre_a,descripcion,carrera,tipo_proyecto,nivel_proyecto) 
    VALUES ('$nombre','".$rutares."','$nombre_a','$descripcion','TI','$proyecto','$nivel')";


            mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
            echo "El archivo '".$nombreres."' se ha subido con éxito <br>";

            $query2 = "INSERT INTO manual_usu (ruta,id_r) 
    VALUES ('".$rutaUfinal."',1)";


            mysqli_query($conexion, $query2) or die("Error" . mysqli_error($conexion));
            echo "El archivo '".$nombredos."' se ha subido con éxito <br>";

            $query3 = "INSERT INTO manual_tec (ruta,id_r) 
    VALUES ('".$rutaTfinal."',1)";


            mysqli_query($conexion, $query3) or die("Error" . mysqli_error($conexion));
            echo "El archivo '".$nombretres."' se ha subido con éxito <br>";
        }
    }
}
