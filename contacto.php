<?php
/*if (function_exists('mail')) { 
    echo "La función mail -SI- esta activada"; 
} else { 
    echo "La función mail -NO- esta activada"; 
} */
$correo = "maxii.xd38@gmail.com";
if (isset($_POST["send"])) {
    if (!empty($_POST["nombre"])  && !empty($_POST["email"]) && !empty($_POST["msj"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $mensaje = $_POST["msj"];
        $asunto = "Nuevo Contacto desde página web";
        $header = 'From: ' . $email . "\r\n" .
            'Reply-To: noreply@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $mail = mail($correo, $asunto, $mensaje, $header);
        if ($mail) {
            $display =  "<p class=\"okok\">Su mensaje ha sido enviado correctamente.</p>";
        } else {
            $display = "<p class=\"error\">Hubo un error al enviar el mensaje. Por favor, inténtelo nuevamente.</p>";
        }
    } else {
        $display = "<p class=\"error\">Debe completar todos los campos obligatorios.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contacto.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/contacto.js"></script>
</head>

<body>
    <header>
        <?php
        include_once 'navbar.php';
        ?>
    </header>
    <div class="container">
        <h1>Contacto</h1>
        <div class="row">
            <div class="col-md">
                ¡Trabajemos juntos!<br> Para más detalles sobre mi trabajo podés descargar mi curriculum o enviarme un mensaje.
            </div>
            <div class="col-md">
                <form action="contacto.php" method="post">
                    <span id="info-name"></span><input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" required><br>
                    <span id="info-email"></span><input type="email" name="email" id="email" placeholder="Email" required><br>
                    <span id="info-msj"></span><textarea type="text" name="msj" id="msj" placeholder="Mensaje" required></textarea><br>
                    <!--  <input type="checkbox" id="checkbox">-->
                    <input type="submit" id="send"  name="send" value="Enviar">
                </form>
                <div id="error-send"><?php $display ?></div>
                <div id="ok-send"></div>
            </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>