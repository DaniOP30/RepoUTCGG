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
    <div class="container-fluid">
        <div class="row" id="rowCard" >
            <div class="col-2">
                <div class="card" id="card_menuLateral"  >
                    <div class="card-body" id="lista-menuLateral">
                        <ul class="list-group-flush" >
                            <li class="list-group-item"><i class="bi bi-file-earmark"></i> Repositorio</li>
                        </ul>
                        <ul class="list-group-flush">
                            <li class="list-group-item"><a href="registrarAlumno.php" style="color: #8C6CEE"><i class="bi bi-person-plus"></i> Registrar Alumno</a>  </li>
                        </ul>
                        <ul class="list-group-flush">
                          <li class="list-group-item"><a href="registrarDocente.php" style="color: black"><i class="bi bi-briefcase"></i> Registrar Docente</a></li>
                        </ul>
                        <ul class="list-group-flush">
                          <li class="list-group-item"><i class="bi bi-file-earmark-plus"></i> Registrar Repositorio</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card" id="card-registroAlumno">
                    <div class="card-body">
                        <div class="container-fluid">
                            <br>
                            <div class="row " >
                                <div class="col-11">
                                    <h5 class="card-title">Alumnos registrados</h5>
                                </div>
                                <div class="col-1">
                                  <button type="button" class="btn btn-success" data-bs-toggle="modal" id="boton-agregarAlumno" data-bs-target="#miModal">+ agregar</button>
                                </div>
                            </div>

                            <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                                <div class="modal-dialog modal-dialog-centered modal-lg" >
                                    <div class="modal-content" id="modal-reigstroAlumno">
                                        <div class="modal-body">
                                            
                                            <h3 class="modal-title" id="modalTitle">Registrar alumno</h3>
                                            Registra alumnos para darles acceso a los repositorios
                                            <form>
                                                <div class="row" id="row-modal">
                                                    <div class="col">
                                                    <input type="text" class="form-control" placeholder="Nombre">
                                                    </div>
                                                    <div class="col">
                                                    <input type="text" class="form-control" placeholder="Apellido">
                                                    </div>
                                                </div>
                                                <div class="row" id="row-modal">
                                                    <div class="col">
                                                    <input type="text" class="form-control" placeholder="Matricula" >
                                                    </div>
                                                    <div class="col">
                                                        <select id="inputState" class="form-control">
                                                            <option selected>--Selecciona tu grupo--</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" id="row-modal">
                                                    <div class="col">
                                                        <select id="inputState" class="form-control">
                                                                <option selected>--Selecciona tu grupo--</option>
                                                                <option>Ing. en Procesos Alimentarios</option>
                                                                <option>Ing. en Mantenimiento Industrial</option>
                                                                <option>Ing. en Desarrollo y Gestión de Software</option>
                                                                <option>Ing. en Energías Renovables</option>
                                                                <option>Lic. en Gestión del Capital Humano</option>
                                                                <option>Ing. en Metal Mecánica</option>
                                                                <option>Ing. en Logística Internacional</option>
                                                                <option>Lic. en Gestión y Desarrollo Turístico</option>
                                                                <option>Lic. en Gastronomía</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" id="row-modal">
                                                    <div class="col">
                                                    <input type="text" class="form-control" placeholder="Usuario">
                                                    </div>
                                                    <div class="col">
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                                                    </div>
                                                </div>
                                                <div class="row" id="row-modal">
                                                <div id="das">
                                                    <button class="btn btn-success" id="boton-registrarAlumno"type="button">Registrar</button>
                                                </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <table class=table>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Carrera</th>
                                            <th>Grupo</th>
                                            <th>Matricula</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>