<!DOCTYPE html>
<html lang="en">
<!--                                                    HEADER                                            -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Styles/styleFlowers.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<?php
include("header.php");

?>

<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6" id="izq">
                    <div class="container">
                        <img src="img/logo.png" class="img-responsive">
                        <h4>Equipo desarrollador</h4><br>
                        <span>Carlos Daniel Olivo Perez</span><br>
                        <span>Daniel Flores Peralta</span><br>
                        <span>Mauricio Lopez Piedra</span><br><br>
                        <div class="circular--portrait">
                            <img src="img/olivo.png" />
                        </div>
                        <div class="circular--portrait">
                            <img src="img/flowers.png" />
                        </div>
                        <div class="circular--portrait">
                            <img src="img/mao.png" />
                        </div>
                    </div>

                </div>
                <div class="col-6" id="der">
                    <div class="card text-center" id="cardLogin">
                        <h5>Iniciar sesion</h5><br>
                        <p class="text-center">Iniciar sesion para acceder al sistema<br>de repositorio mas chido</p>
                        <form>
                            <div class="form-group ">
                                <label for="formGroupExampleInput">Ingresa tu usuario</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Ingresa tu contraseña</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input"><br>

                                <button type="button" class="btn btn-success btn-lg btn-block">Iniciar sesion</button><br>
                                <span>No tienes cuenta? <a href="#">Registrate aqui.</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
include("footer.php");
?>
</body>

</html>