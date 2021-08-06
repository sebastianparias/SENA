<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamiento de citas</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="consulta_citas.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Citas</a>
            <a href="consulta_clientes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Clientes</a>
            <a href = "registro_citas.php" class="w3-bar-item w3-button w3-padding-large w3-white">Nueva cita</a>
            <a href="registro_clientes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Nuevo cliente</a>
            <a href="cerrar_sesion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cerrar sesión</a>
        </div>
    </div>

    <div id="contenido">

        <div id="encabezado">
            <h1>Agroveterinaria La Salle</h1>
            <img src="Images/logo.jpg" id="logo">
            <h2>Agendamiento de citas</h2>
        </div>


        <div id="form">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <label for "id">Identificación cliente:</label><br>
                <input type="number" id="id" min=10000000 max=1999999999 name="id_client" required><br>
                <label for "service">Tipo de servicio:</label><br>
                <select name="service">
                    <option value="Peluquería">Peluquería</option>
                    <option value="Revisión médica">Revisión médica</option>
                </select><br>
                <label for "place">Lugar:</label><br>
                <select name="place">
                    <option value="Local">Local</option>
                    <option value="Domicilio">Domicilio</option>
                </select><br>
                <label for "address">Dirección:</label><br>
                <input type="text" id="address" name="address" placeholder="Ingrese si es domiclio"><br>
                <label for "date">Fecha:</label><br>
                <input type="date" id="date" name="date" required><br>
                <label for "time">Hora:</label><br>
                <input type="time" id="time" name="time" step="1800" required><br>
                <input type="submit" id="submit">

            </form>

        </div>

        <?php

        require("datos_conexion.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

        if (!$conexion) {
            die("No se ha podido conectar con la base de datos");
        }

        @$id_cliente = $_POST['id_client'];
        @$tipo_cita = $_POST['service'];
        @$lugar_cita = $_POST['place'];
        @$direccion_cita = $_POST['address'];
        @$fecha_cita = $_POST['date'];
        @$hora_cita = $_POST['time'];

        $sentencia_sql = "insert into citas (id_cliente, tipo_cita, lugar_cita, direccion_cita, fecha_cita, hora_cita) values ($id_cliente,
            '$tipo_cita', '$lugar_cita', '$direccion_cita', '$fecha_cita', '$hora_cita')";

        $consulta = mysqli_query($conexion, $sentencia_sql);

        /*if ($consulta) {
            echo "<script>window.alert('Cita registrada correctamente.')</script>";
        } else {
            echo "<script>window.alert('Hubo un error en el registro de la cita, intenta nuevamente.')</script>";
        }*/

        mysqli_close($conexion);

        ?>

    </div>

</body>

</html>