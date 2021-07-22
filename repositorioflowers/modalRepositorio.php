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
                    
                    <h3 class="modal-title" id="modalTitle">Nuevo Repositorio</h3>
                    Registre sus repositorios y sus manuales
                    <form action="back/subir_archivos.php" method="POST" enctype="multipart/form-data">
                        <div class="row" id="row-modal">
                            <div class="col">

                                <input type="text" class="form-control" placeholder="Nombre" name="nombreA">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre del repositorio" name="nombreR">
                            </div>
                        </div>
                        <div class="row" id="row-modal">
                            <textarea placeholder="Descripción" id="texA" cols="30" rows="5" name="descripcion"></textarea>
                        </div>
                        <div class="row" id="row-modal-mat">
                            <div class="col" >
                                <div id="drop">
                                    Ingrese su memoria de estadia
                                    <input type="file" class="form-control" id="inputFile" name="inputR" >
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        
                        <div class="row" id="row-modal2">
                            <div class="col">
                                <div id="drop">
                                    Ingrese su manual de usuario
                                    <input type="file" class="form-control"  id="inputFile" name="inputU" >
                                </div>
                            </div>
                            
                            <div class="col">
                                <div id="drop">
                                    Ingrese su manual tecnico
                                    <input type="file" class="form-control"  id="inputFile" name="inputT">
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row" id="row-modal2">
                            <div class="col">
                                <select id="inputState" class="form-control" name="tipoP">
                                    <option selected>--Tipo de proyecto--</option>
                                    <option>Integradora</option>
                                    <option>Estadia</option>
                                    <option>Especial</option>                                             
                                </select>

                            </div>
                            
                            <div class="col">
                               <select id="inputState" class="form-control" name="nivelP">
                                    <option selected>--Nivel de proyecto--</option>
                                    <option>TSU</option>
                                    <option>Ingenieria</option>                                                        
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="row" id="row-modal">
                        <div id="das">
                            <button class="btn btn-success"  id="boton-registrarAlumno"type="submit" name="submit">Registrar</button>
                        </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    
    
</body>
</html>