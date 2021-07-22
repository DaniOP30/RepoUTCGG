<?php
require 'back/conexion.php';

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
        $nombre = $row[1];
        $_SESSION['nombre'] = $nombre;
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

<!DOCTYPE html>
<html lang="en">
<!--                                                    HEADER                                            -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<!--  FONTS IMPORT   -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleflowers.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<?php
include("header.php");

?>

<body>
<body>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/ilustracion.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Iniciar sesión</h3>
              <p class="mb-4">Inicia sesión para acceder al sistema
                            de repositorio mas chido</p>
            </div>
            <form action="#" method="POST">
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" id="username" name="usuario">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
                
              </div>
   
              <input type="submit" value="Iniciar sesión" class="btn btn-block " style="background-color:#42C392; color:white"> <br>
              <label class="ml-auto"><a href="#" class="forgot-pass">No tienes cuenta? <span style="color:#9271F6;">Registrate</span></a></label> 
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

<?php
include("footer.php");
?>

<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
         
</body>

</html>