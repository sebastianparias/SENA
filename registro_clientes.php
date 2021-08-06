<?php
//sesion
session_start();
$varsession = $_SESSION['usuario'];
if ($varsession == NULL || $varsession == '') {
    header("location:login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de clientes</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
            <a href="consulta_citas.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Citas</a>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="consulta_clientes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Clientes</a>
            <a href="registro_citas.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Nueva cita</a>
            <a href="registro_clientes.php" class="w3-bar-item w3-button w3-padding-large w3-white">Nuevo cliente</a>
            <a href="cerrar_sesion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cerrar sesión</a>
        </div>
    </div>

    <div id="contenido">
        <div id="encabezado">
            <h1>Agroveterinaria La Salle</h1>
            <img src="Images/logo.jpg" id="logo">
            <h2>Registro de clientes</h2>
        </div>

        <div>
            <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for "id">Identificación cliente:</label><br>
                <input type="number" name="id" id="id" min=10000000 max=1999999999 required><br>
                <label for "name">Nombre/s cliente:</label><br>
                <input type="text" name="name" id="name" required><br>
                <label for "last_name">Apellidos:</label><br>
                <input type="text" name="last_name" numberid="last_name" required><br>
                <label for "email">Email:</label><br>
                <input type="email" name="email" id="email" required><br>
                <label for "phone">Teléfono:</label><br>
                <input type="number" name="number" id="phone" min=3009999999 max=3519999999 required><br>
                <label for "adress">Dirección:</label><br>
                <input type="text" name="address" id="adress" required><br>
                <input type="submit" id="submit">
            </form>
        </div>

        <?php

        require("datos_conexion.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

        if (!$conexion) {
            die("No se ha podido conectar con la base de datos");
        }

        @$id_cliente = $_POST['id'];
        @$nombres_cliente = $_POST['name'];
        @$apellidos_cliente = $_POST['last_name'];
        @$email_cliente = $_POST['email'];
        @$telefono_cliente = $_POST['number'];
        @$direccion_cliente = $_POST['address'];

        $sentencia_sql = "insert into clientes (id_cliente, nombres_cliente, apellidos_cliente,
            email_cliente, telefono_cliente, direccion_cliente) values ($id_cliente,
            '$nombres_cliente', '$apellidos_cliente', '$email_cliente', $telefono_cliente, '$direccion_cliente')";

        $consulta = mysqli_query($conexion, $sentencia_sql);

        /*if ($consulta) {
                echo "<script>window.alert('Cliente registrado correctamente.')</script>";
            } else {
                echo "<script>window.alert('Hubo un error en el registro del empleado, intenta nuevamente.')</script>";
            }*/

        mysqli_close($conexion);

        ?>

    </div>

</body>

</html>