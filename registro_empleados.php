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
    <title>Registro de empleados</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="consulta_empleados.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Empleados</a>
            <a href="registro_empleados.php" class="w3-bar-item w3-button w3-padding-large w3-white">Nuevo empleado</a>
            <a href="cerrar_sesion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cerrar sesión</a>
        </div>
    </div>

    <div id="contenido">

        <div id="encabezado">
            <h1>Agroveterinaria La Salle</h1>
            <img src="Images/logo.jpg" id="logo">
            <h2>Registro de empleados</h2>
        </div>

        <div id="form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for "id">Identificación empleado:</label><br>
                <input type="number" id="id" min=10000000 max=1999999999 name="id" required><br>
                <label for "name">Nombre/s:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for "last_name">Apellidos:</label><br>
                <input type="text" id="last_name" name="last_name" required><br>
                <label for "email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for "phone">Teléfono:</label><br>
                <input type="number" id="phone" min=3009999999 max=3519999999 name="phone" required><br>
                <label for "adress">Dirección:</label><br>
                <input type="text" id="adress" name="address" required><br>
                <label for="init_date">Fecha de ingreso:</label><br>
                <input type="date" id="init_date" name="init_date" required><br>
                <label for="born_date">Fecha de nacimiento:</label><br>
                <input type="date" id="born_date" name="born_date" required><br>
                <label for "user">Usuario:</label><br>
                <input type="text" id="user" name="user" required><br>
                <label for "pass">Contraseña:</label><br>
                <input type="password" id="pass" name="pass" required><br>
                <input type="submit" id="submit">

            </form>
        </div>

        <?php

        require("datos_conexion.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

        if (!$conexion) {
            die("No se ha podido conectar con la base de datos");
        }

        @$id_empleado = $_POST['id'];
        @$nombres_empleado = $_POST['name'];
        @$apellidos_empleado = $_POST['last_name'];
        @$email_empleado = $_POST['email'];
        @$telefono_empleado = $_POST['phone'];
        @$direccion_empleado = $_POST['address'];
        @$ingreso_empleado = $_POST['init_date'];
        @$nacimiento_empleado = $_POST['born_date'];
        @$usuario_empleado = $_POST['user'];
        @$contrasenia_empleado = $_POST['pass'];

        $sentencia_sql = "insert into empleados (id_empleado, nombres_empleado, apellidos_empleado,
            email_empleado, telefono_empleado, direccion_empleado, ingreso_empleado, nacimiento_empleado,
            usuario_empleado, contrasenia_empleado) values ($id_empleado, '$nombres_empleado', '$apellidos_empleado',
            '$email_empleado', $telefono_empleado, '$direccion_empleado', '$ingreso_empleado', '$nacimiento_empleado',
            '$usuario_empleado', '$contrasenia_empleado')";

        $consulta = mysqli_query($conexion, $sentencia_sql);

        /*if ($consulta == true) {
            echo "<script>window.alert('Empleado registrado correctamente.')</script>";
        } else {
            echo "<script>window.alert('Hubo un error en el registro del empleado, intenta nuevamente.')</script>";
        }*/

        mysqli_close($conexion);

        ?>

    </div>

</body>

</html>