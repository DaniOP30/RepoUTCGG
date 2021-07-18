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
</body>
</html>