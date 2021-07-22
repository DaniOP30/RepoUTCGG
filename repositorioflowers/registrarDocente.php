<?php
session_start();
$nombre = $_SESSION['nombre'];

if(!isset($_SESSION['rol'])){
    header('location:login.php');
}else{
    if($_SESSION['rol']!=1){
        header('location:login.php');

    }
}
?>
<?php
require 'back/conexion.php';

$query = "SELECT * FROM tb_docente";
$result = mysqli_query($conexion, $query);


?>


<!DOCTYPE html>
<html lang="en">

<!--          HEADER           -->

<!--  FONTS IMPORT   -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
<head>
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Styles/styleFlowers.css">

    <link rel="stylesheet" href="css/bsadmin.css">
    <link rel="stylesheet" href="css/style_table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
    <?php
    include 'sidebar.php';
    include 'modalDocente.php';
    ?>
    <div class="container" >
    <div class="content p-4">
    

    </div>
  <div class="content">
  <h1 class="display-5 mb-4" style="margin-top:10px; font-weight:400 ; 
  font-size:30px; margin-left:20px">Docentes registrados</h1>
    <div class="container" style="background-color:#F7F9FB; border-radius:20px">
    
      <div class="table-responsive custom-table-responsive">
      <button type="button" class="btn" style="background-color:#42C392; color:white; margin-bottom:30px; margin-top:20px; padding:10px" data-bs-toggle="modal" id="boton-agregarAlumno" data-bs-target="#miModal">
      <i class="fa fa-plus" style="color:white"></i>Agregar Nuevo</button>
      
        <table class="table custom-table">
          <thead>
            <tr> 
              <th scope="col">
              </th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Carrera</th>
              <th scope="col">Grupo</th>
              <th scope="col">Matricula</th>
              <th scope="col">Usuario</th>
              <th scope="col">Contraseña</th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row">
              <th scope="row">
              </th>
              <?php
             while ($registro = mysqli_fetch_array($result)) {
             ?>
           
              <td><a href="#"><?php echo $registro['nombre']; ?></a></td>
              <td><?php echo $registro['apellidos']; ?></td>
              <td><?php echo $registro['carrera']; ?></td>
              <td><?php echo $registro['cuatri']; ?></td>
              <td>18307056</td>
              <td><?php echo $registro['username']; ?></td>
              <td class="hidetext" style="-webkit-text-security: disc;"><?php echo $registro['password']; ?></td>
            <td> <button type="button" class="btn btn-danger btn-sm">Eliminar</button></td>
            </tr>
           
            <tr class="spacer"><td colspan="100"></td></tr>
              <th scope="row">
              </th>
              <?php
                }?>
          </tbody>
        </table>
      </div>


    </div>

  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/anima.js"></script>
    <script src="js/bsadmin.js"></script>
</body>

</html>