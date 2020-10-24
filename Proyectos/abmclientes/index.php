<?php
//si es postback generar el envio del formulario
$pos = isset($_GET["pos"]) ? $_GET["pos"] : "";

//inicializa un array para los clientes en vacio
$aClientes = [];
//si existe el archivo cargo el array con los clientes
if (file_exists("archivo.txt")) {
    $json_datos = file_get_contents("archivo.txt");
    $aClientes = json_decode($json_datos, true);
}

if ($_POST) {


    if (isset($_POST["insertar"])) {
        if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {

            $nombre = date("Ymdhmsi");
            $archivo_tmp = $_FILES["archivo"]["tmp_name"];
            $nombreArchivo = basename($_FILES["archivo"]["name"]);
            $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
            //$miArchivo = dirname(__FILE__);
            $nuevoNombre = $nombre . "." . $extension;
            //$miArchivo = $miArchivo . "/CVS/" . $nombre . $extension;
            move_uploaded_file($archivo_tmp, "archivos/$nuevoNombre");
        }

        $aClientes[] = array(
            "dni" => trim($_POST["dni"]),
            "nombreyapellido" => trim($_POST["nombreyapellido"]),
            "email" => trim($_POST["email"]),
            "telefono" => trim($_POST["telefono"]),
            "archivo" => $nuevoNombre
        );

        //convierte el array en json
        $json_datos = json_encode($aClientes);
        //agregar el json en un archivo
        file_put_contents("archivo.txt", $json_datos);

        //insertamos el nuevo cliente en la primer posicion disponible del array
        //trim borra espacios inecessarios
    } else if (isset($_POST["borrar"])) {
        //borrar el elemento del array
        unlink("archivos/" . $aClientes[$pos]['archivo']);
        unset($aClientes[$pos]);

        $json_datos = json_encode($aClientes);

        //si existe el archivo, cargo el array con los clientes

        file_put_contents("archivo.txt", $json_datos);
    } else if (isset($_POST["actualizar"])) {

        if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
            $nombre = date("Ymdhmsi");
            $archivo_tmp = $_FILES["archivo"]["tmp_name"];
            $nombreArchivo = basename($_FILES["archivo"]["name"]);
            $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
            //$miArchivo = dirname(__FILE__);
            $nuevoNombre = $nombre . "." . $extension;
            //$miArchivo = $miArchivo . "/CVS/" . $nombre . $extension;
            move_uploaded_file($archivo_tmp, "archivos/$nuevoNombre");
            unlink("archivos/" . $aClientes[$pos]['archivo']);
        }

        $aClientes[$pos] = array(
            "dni" => trim($_POST["dni"]),
            "nombreyapellido" => trim($_POST["nombreyapellido"]),
            "email" => trim($_POST["email"]),
            "telefono" => trim($_POST["telefono"]),
            "archivo" => $nuevoNombre
        );

        //guardar el array aCliente en el archivo
        $json_datos = json_encode($aClientes);
        file_put_contents("archivo.txt", $json_datos);
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style type="text/css">
        body {
            box-sizing: content-box;
            margin: 2% 2% 2% 1%;
            padding: 2% 2% 2% 1%;
        }

        h1 {
            text-align: center;
            padding-bottom: 40px;
        }

        section {}

        img {
            width: 100px;
            height: 100px;

        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div>
            <h1 class="text-center">Registro de clientes</h1>
            <div class="row">
                <div class="col-sm-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label for="dni">Dni:</label>
                                <input type="text" name="dni" class="form-control" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["dni"] : ""; ?>">
                            </div>
                            <div class="col-sm-12">
                                <label for="nombreyapellido">Nombre y apellido:</label>
                                <input type="text" name="nombreyapellido" class="form-control" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["nombreyapellido"] : ""; ?>">
                            </div>
                            <div class="col-sm-12">
                                <label for="telefono">Telefono:</label>
                                <input type="text" name="telefono" class="form-control" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["telefono"] : ""; ?>">
                            </div>
                            <div class="col-sm-12">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["email"] : ""; ?>">
                            </div>
                            <div class="col-sm-12">
                                <label for="archivo">Archivo:</label>
                                <input type="file" class="form-control-file" name="archivo" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["archivo"] : ""; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="index.php" class="form-control btn btn-primary">Limpiar</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" class="form-control btn btn-secondary" name="insertar" value="Insertar">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" class="form-control btn btn-danger" name="borrar" value="Borrar">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" class="form-control btn btn-success" name="actualizar" value="Actualizar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-sm-6">
                    <table class="table">
                        <div class="row">
                            <div class="col-sm-12">
                                <tr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <th>Dni</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Archivo</th>
                                        </div>
                                    </div>
                                </tr>
                                <?php
                                foreach ($aClientes as $indice => $cliente) { ?>
                                    <tr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <td><a href="index.php?pos=<?php echo $indice; ?>"><?php echo $cliente["dni"]; ?></a></td>
                                                <td><?php echo $cliente["nombreyapellido"]; ?></td>
                                                <td><?php echo $cliente["email"]; ?></td>
                                                <td><?php echo $cliente["telefono"]; ?></td>
                                                <td><a href="https://minomaximiliano.com.ar/Proyectos/abmclientes/archivos/<?php echo $cliente["archivo"]; ?>"><?php echo $cliente["archivo"] ?><img alt="img" src="https://minomaximiliano.com.ar/Proyectos/abmclientes/archivos/<?php echo $cliente["archivo"]; ?>"></a><br>


                                                </td>
                                            </div>
                                        </div>
                                    </tr><?php } ?>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>