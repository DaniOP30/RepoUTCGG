<?php
require 'back/conexion.php';
$id=$_GET['valor'];
$query = "SELECT * FROM repositorios where id=$id";
$result = mysqli_query($conexion, $query);
$registro = mysqli_fetch_array($result);



$query2 = "SELECT * FROM manual_tec where id=$id";
$result2 = mysqli_query($conexion, $query2);
$registro2 = mysqli_fetch_array($result2);



$query3 = "SELECT * FROM manual_usu where id=$id";
$result3 = mysqli_query($conexion, $query3);
$registro3 = mysqli_fetch_array($result3);



?>
<div class="modal fade" id="ventanamodal" tabindex="-1" role="dialog" aria-labelledby="tituloventana" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal">
            <div class="modal-header" id="headersito">
            <h5 class="text-center"><?php echo $registro['nombre']; ?></h5><br>
                <button class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hiden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12" id="principal">
                            <!-- Level 1: .col-sm-9 -->
                            <div class="row">
                                <div class="col-4 col-sm-4" id="modalIzq" >
                                    <picture>
                                        <img src="https://lastfm.freetls.fastly.net/i/u/770x0/34819209333548f09304bed428227fa4.jpg" class="img-fluid img-thumbnail" alt="...">
                                    </picture>
                                </div>
                                <div class="col-8 col-sm-8" id="modalDer">
                                <p><?php echo $registro['nombre_a']; ?></p>


                                <p style="font-size:14px"><?php echo $registro['descripcion']; ?></p>

                                <br>
                                    </div>
                                <div class="container-fluid" id="segundo">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-4">

                                                <a href="<?php echo $rutadescarga?>" download="Repositorio">
                                                    <picture>
                                                        <img src="https://smartandroid.net/wp-content/uploads/2019/01/lirelespdf4.png" class="img-fluid img-thumbnail" alt="...">
                                                    </picture>Memoria de Estadia
                                                </a>


                                            </div>
                                            <div class="col-4">
                                            
                                                <a href="<?php echo $rutadescarga3?>" download="ManualUsuario">
                                                    <picture>
                                                        <img src="https://www.alegsa.com.ar/Imagen/icono-docx.png" class="img-fluid img-thumbnail" alt="...">
                                                    </picture>Manual de Usuario
                                                </a>


                                            </div>
                                            <div class="col-4">

                                                <a href="<?php echo $rutadescarga2?>" download="ManualTecnico">
                                                    <picture>
                                                        <img src="https://www.alegsa.com.ar/Imagen/icono-docx.png" class="img-fluid img-thumbnail" alt="...">
                                                    </picture>Manual Técnico
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>