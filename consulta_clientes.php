<?php

//sesion
session_start();
$varsession = $_SESSION['usuario'];
if ($varsession == NULL || $varsession == '') {
    header("location:login.php");
    die();
}

require("datos_conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (!$conexion) {
    die("No se ha podido conectar con la base de datos");
}

$consulta = "SELECT * FROM CLIENTES";

$resultado = mysqli_query($conexion, $consulta);

$datos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <title></title>
    <style>
        table.dataTable thead {
            background: dodgerblue;
            color: white;
        }
    </style>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel = "stylesheet" href = "tables.css">

</head>

<body>

    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="consulta_citas.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Citas</a>
            <a href = "consulta_clientes.php" class="w3-bar-item w3-button w3-padding-large w3-white">Clientes</a>
            <a href="registro_citas.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Nueva cita</a>
            <a href="registro_clientes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Nuevo cliente</a>
            <a href="cerrar_sesion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cerrar sesión</a>
        </div>
    </div>

    <h1 class="text-center" id = "margin">Agroveterinaria La Salle</h1>

    <img src="Images/logo.jpg" id="logo" class = "text-center">

    <h3 class="text-center">Clientes</h3>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="prueba" class="table-striped table-bordered" style="width: 100%">
                    <thead class="tex-center">
                        <th>Identificación</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $value) {
                        ?>
                            <tr>
                                <td><?php echo $value['id_cliente'] ?></td>
                                <td><?php echo $value['nombres_cliente'] ?></td>
                                <td><?php echo $value['apellidos_cliente'] ?></td>
                                <td><?php echo $value['email_cliente'] ?></td>
                                <td><?php echo $value['telefono_cliente'] ?></td>
                                <td><?php echo $value['direccion_cliente'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>



    <script>
        //Idiomas con el 1er método   
        $(document).ready(function() {
            $('#prueba').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }

            });
        });
    </script>

    <?php

    mysqli_close($conexion);

    ?>

</body>

</html>