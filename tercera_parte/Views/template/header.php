<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema de cañones</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styles.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">

</head>
<style>
    .home{
    position: absolute;
    top: 0;
    top: 0;
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
    background-color: var(--body-color);
    transition: var(--tran-05);
}
/* sistema de cañones */
.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
    text-align: center;
}

.sidebar.close ~ .home{
    left: 78px;
    height: 100vh;
    width: calc(100% - 78px);
}
body.dark .home .text{
    color: var(--text-color);
}
</style>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo base_url(); ?>admin/listar">UTR SUR</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-capitalize" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre']; ?> <i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/salir">Salir</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <a class="nav-link active" href="<?php echo base_url(); ?>admin/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks fa-lg"></i></div>
                                Prestamo
                            </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            Cañones
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Registro</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Marca</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>materia">color</a>

                            </nav>
                        </div>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                       <a class="nav-link active" href="<?php echo base_url(); ?>estudiantes    ">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate fa-lg"></i>
                            </div>
                            Maestros
                        </a>
                        <?php } ?>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <a class="nav-link active" href="<?php echo base_url(); ?>usuarios/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-lg"></i>
                                </div>
                                Usuarios
                            </a>
                            
                        <?php } ?>
                       

                    </div>
                </div>
              
            </nav>

            
        </div>

        <?php if ($_SESSION['rol'] == 2) { ?>
        <!-- contenido de información requerida -->
    <section class="home">
        <div class="text" >Bienvenidos <br>Sistema de prestamos de equipos, donde podrás prestar:</div>
               <!-- imagenes  -->
        
            <div class="text">
                <p>Proyectores</p>
                <img src="../Assets/img/proyector.png" alt="Proyectores"height="300" width=380>
                
            </div>
    
            <div class="text">
                <p>Bocinas</p>
                <img src="../Assets/img/bocina.jpg" style="float: center" height="300" width=380>
                
            </div>

            <div class="text">
                <p>Cable HDMI</p>
                <img src="../Assets/img/HDMI.jpg" style="float: center" height="300" width=380>
                
            </div>

            <div class="text">
                <p>Lap top</p>
                <img src="../Assets/img/laptop.jpeg" style="float: center" height="300" width=380>
               
            </div>
        
      
        
         

 
        




    </section>
    <?php } ?>