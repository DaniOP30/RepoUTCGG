<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body >
    <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog modal-dialog-centered modal-lg" >
            <div class="modal-content" id="modal-reigstroAlumno">
                <div class="modal-body">
                    
                    <h3 class="modal-title" id="modalTitle">Registrar Docente</h3>
                    Registra docentes para darles acceso a los repositorios
                    <form action="back/subir_docente.php" method="post">
                        <div class="row" id="row-modal">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Apellido" name="apellidos">
                            </div>
                        </div>
                        <div class="row" id="row-modal">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Matricula" name="matricula">
                            </div>
                        </div>
                        <div class="row" id="row-modal">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Usuario" name="username">
                            </div>
                            <div class="col">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
                            </div>
                        </div>
                        <div class="row" id="row-modal">
                        <div id="das">
                            <button class="btn btn-success" id="boton-registrarAlumno"type="submit">Registrar</button>
                        </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    
    
</body>
</html>