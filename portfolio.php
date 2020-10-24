<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/proyectos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header>
        <?php
        include_once 'navbar.php';
        ?>
    </header>
    <div class="container" id="proyectos">
        <h1>Mis Proyectos</h1>
        <p>
            Estos son los proyectos que he realizado:
        </p>
        <div class="row justify-content-center ">
            <div class="col-lg-3 col-md-4">
                <img src="img/abmclientes.png" alt="Proyecto ABM Clientes">
                <h6>ABM CLIENTES</h6>
                <p>Alta, Baja, modificación de un registro de
                    clientes empleando:. Realizado en HTML, CSS,
                    PHP, Bootstrap y Json.</p>
                <div>
                    <a class="a-online" href="https://minomaximiliano.com.ar/Proyectos/abmclientes/index.php">Ver Online</a>
                    <a class="a-code" target="_blank" href="https://github.com/ghmex/abmclientes">Código Fuente</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <img src="img/abmventas.png" alt="Proyecto ABM Ventas">
                <h6>SISTEMA GESTIÓN DE VENTAS</h6>
                <p>Sistema de gestión de clientes, productos y
                    ventas. Realizado en HTML, CSS, PHP, MVC,
                    Bootstrap, Js, Ajax, jQuery y MySQL de base
                    de datos.</p>
                <div>
                    <a class="a-online" href="#">Ver Online</a>
                    <a class="a-code" href="#">Código Fuente</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <img src="img/SISTEMATRAMITES.png" alt="Proyecto Sistema Trámites">
                <h6>PROYECTO INTEGRADOR</h6>
                <p>Proyecto Full Stack desarrollado en PHP, Laravel,
                    Javascript, jQuery, AJAX, HTML, CSS, con panel
                    administrador, gestor de usuarios, módulo de
                    permisos y funcionalidades a fines.</p>
                <div>
                    <a class="a-online" href="#">Ver Online</a>
                    <a class="a-code" href="https://github.com/depcsuite/FS-092019-TM1.git">Código Fuente</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>