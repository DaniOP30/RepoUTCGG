<?php
require 'conexion.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();
        session_destroy();
    }
    if (isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location:admin.php');
                break;
            case 2:
                header('location:alumno.php');
                break;

                default;
        }
    }

    if(isset($_POST['usuario'])&& isset($_POST['password'])){
        $username = $_POST['usuario'];
        $password = $_POST['password'];

    $q = "SELECT * FROM usuarios WHERE username = '$username' and password = '$password'";
    $consulta = mysqli_query($conexion,$q);
    $row = mysqli_fetch_array($consulta);
    if($row==true){
        $rol=$row[3];
        $_SESSION['rol'] = $rol;
        switch($_SESSION['rol']){
            case 1:
                header('location:admin.php');
                break;
            case 2:
                header('location:alumno.php');
                break;

                default;
        }
    }else{
        echo "el usuario no existe";
    }
    }

?>

<!-- $_SESSION Es la variable que es un arreglo donde se almacena la sesion
VARIABLE SUPER GLOBAL
Para saber el ID de sesión usar la función session_id()
Este ID se genera cuando se crea la sesión, mediante el uso de la función session_start() 






 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
 </head>
 <body>
 <h1>INICIAR SESIÓN</h1>
 <form action="#" method="POST">
 Usuario:<br><input type="text" name="usuario"><br>
 Contraseña:<br><input type="text" name="password">
 <input type='submit'value='Iniciar sesion'>
  </form>
 
     
 </body>
 </html>