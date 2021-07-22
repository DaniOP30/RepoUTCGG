
<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="sidebar-toggle text-light mr-3" ><i class="fa fa-bars" style="color:#122245;"></i></a>

    <a class="navbar-brand" href="#"  style="color:#122245; font: weight 600;"><i class="fa fa-code-branch" style="color:#42C392"></i>UTCGG</a>

    <div class="navbar-collapse collapse" >
        <ul class="navbar-nav ml-auto" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" style="color:#0B1427">
                    <i class="fa fa-user" style="color:#42C392"></i> <?php echo $nombre; ?> 
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Información</a>
                    <a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<div class="d-flex">
    <nav class="sidebar bg-light" >
        <ul class="list-unstyled">
            <li ><a href="admin.php"><i class="fa fa-fw fa-file-search" style="color:#9271F6" ></i> Repositorios</a></li>
            <li><a href="registrarAlumno.php"><i class="fa fa-fw fa-user-plus" style="color:#42C392"></i> Registrar alumno</a></li>
            <li><a href="registrarDocente.php"><i class="fa fa-fw fa-chalkboard-teacher" style="color:#42C392"></i> Registrar Docente</a></li>
            <li><a href="registrarRepositorio.php"><i class="fa fa-fw fa-file-plus" style="color:#42C392"></i>Agregar repositorio</a></li>
           
    </nav>