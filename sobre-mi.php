<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/sobre-mi.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
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
    <div class="container" id="about-me">
        <div class="row">
            <div class="col align-items-start">
                <h1>Sobre mi</h1>
                <p><img src="img/img-3.png" alt="Imagen Personal">
                    Soy Desarrollador Full Stack, apasionado por la tecnología y la informática. Me encanta programar y todo lo relacionado
                    con Internet y las nuevas tecnologías.
                </p>
                <a href="https://github.com/ghmex" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/maximiliano-miño" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="cv/mi-cv.docx" download="cv/mi-cv.docx" id="download-cv">DESCARGÁ MI CV</a>
            </div>
            <!-- <div class="col text-center">
                
            </div>-->
        </div>
    </div>
    <div class="container-fluid" id="lang">
        <div class="container-sm">
            <div class="row">
                <div class="col">
                    <h2>Tecnologías de programación</h2>
                </div>
            </div>
            <div class="row text-center" id="img-tec">
                <div class="col">
                    <img src="img/html-1.png">
                    <p>HTML 5</p>
                </div>
                <div class="col">
                    <img src="img/css-1.png">
                    <p>CSS 3</p>
                </div>
                <div class="col">
                    <img src="img/js-1.png">
                    <p>JavaScript</p>
                </div>
                <div class="col">
                    <img src="img/php-1.png">
                    <p>PHP</p>
                </div>
                <div class="col">
                    <img src="img/mysql-1.png">
                    <p>MySQL</p>
                </div>
                <div class="col">
                    <img src="img/mariadb-1.png">
                    <p>MariaDB</p>
                </div>
                <div class="col">
                    <img src="img/bootstrap-1.png">
                    <p>Bootstrap</p>
                </div>
                <div class="col">
                    <img src="img/jquery-1.png">
                    <p>JQuery</p>
                </div>
                <div class="col">
                    <img src="img/react-1.png">
                    <p>React JS</p>
                </div>
                <div class="col">
                    <img src="img/laravel-1.png">
                    <p>Laravel</p>
                </div>
                <div class="col">
                    <img src="img/github-1.png">
                    <p>GitHub</p>
                </div>
                <div class="col">
                    <img src="img/sublime-1.png">
                    <p>Sublime Text</p>
                </div>
                <div class="col">
                    <img src="img/vsc.png">
                    <p>Visual Studio Code</p>
                </div>
                <div class="col">
                    <img src="img/heidi-1.png">
                    <p>Heidi SQL</p>
                </div>
                <div class="col">
                    <img src="img/apache-2.png">
                    <p>Apache</p>
                </div>
                <div class="col">
                    <img src="img/xampp-1.png">
                    <p>XAMPP</p>
                </div>
                <div class="col">
                    <img src="img/word-1.png">
                    <p>Word</p>
                </div>
                <div class="col">
                    <img src="img/excel-1.png">
                    <p>Excel</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="otros-datos">
        <div class="row">
            <div class="col-lg-5 mr-lg-2">
                <i class="fas fa-comment-alt"></i>
                <h5>IDIOMAS</h5>
                <p>ESPAÑOL - Nativo<br>
                    INGLES - Intermediate B1</p>
            </div>
            <div class="col-lg-5 ml-lg-2">
                <i class="fas fa-star"></i>
                <h5>INTERESES</h5>
                <p>Computación<br>Nuevas tecnologías en general</p>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid" id="exp-laboral">
        <h3 class=""><i class="fas fa-briefcase"></i>&nbsp;&nbsp;Experiencia laboral</h3>
        <div class="row">
            <div class="col-md-5 mr-md-2">
                <div class="row">
                    <div class="col-3">
                        <h5>LOGO</h5>
                    </div>
                    <div class="col-9">
                        <h5 class="exp">Nombre del cargo</h5>
                        <h6 class="exp">Nombre de la empresa</h6>
                        <p class="exp">FEB 2016 - PRESENTE</p>
                        <ul class="exp">
                            <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                            <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                            <li>Dolore magna aliquam erat volutpat.</li>
                        </ul>
                        <a href="#">Ver empresa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ml-md-2">
                <div class="row">
                    <div class="col-3">
                        <h5>LOGO</h5>
                    </div>
                    <div class="col-9">
                        <h5 class="exp">Nombre del cargo</h5>
                        <h6 class="exp">Nombre de la empresa</h6>
                        <p class="exp">FEB 2016 - PRESENTE</p>
                        <ul class="exp">
                            <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                            <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                            <li>Dolore magna aliquam erat volutpat.</li>
                        </ul>
                        <a href="#">Ver empresa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="container-fluid" id="estudios">
        <h3><i class="fas fa-graduation-cap"></i>Estudios</h3>
        <div class="row">
            <div class="col-md-5 mr-md-2">
                <div class="row">
                    <div class="col-3">
                        <h5>LOGO</h5>
                    </div>
                    <div class="col-9">
                        <h5 class="exp">Programador Web Full Stack</h5>
                        <h6 class="exp">DePc Suite</h6>
                        <p class="exp">9/2019 - 1/2020</p>
                        <!--<ul class="exp">
                            <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                            <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                            <li>Dolore magna aliquam erat volutpat.</li>
                        </ul>-->
                        <a target="_blank" href="https://depcsuite.com/?v=5b61a1b298a0">Ver instituto</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ml-md-2">
                <div class="row">
                    <div class="col-3">
                        <h5>LOGO</h5>
                    </div>
                    <div class="col-9">
                        <h5 class="exp">Técnico en armado y reparación de pc y redes informáticas</h5>
                        <h6 class="exp">Centro de Capacitación en informática e idiomas</h6>
                        <p class="exp">13/03/12 – 19/03/13</p>
                        <!-- <ul class="exp">
                            <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                            <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                            <li>Dolore magna aliquam erat volutpat.</li>
                        </ul>
                        <a target="_blank" href="https://depcsuite.com/?v=5b61a1b298a0">Ver instituto</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once 'footer.php';
    ?>
</body>

</html>