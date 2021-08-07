<?php

session_start();

/*if (isset($_SESSION['usuario'])) {
    header('Location: consulta_citas.php');
}*/

//require 'conexion.php';

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'agroveterinaria';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully";

if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $sql = "SELECT id_empleado, usuario_empleado, contrasenia_empleado FROM empleados WHERE usuario_empleado = '$usuario' AND contrasenia_empleado = '$contrasenia'";
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) > 0) {
        $row = mysqli_fetch_assoc($results);
        $_SESSION['usuario'] = $row['id_empleado'];
        if($row['usuario_empleado'] == 'admin') {
            header("Location: consulta_empleados.php");
        } else {
            header("Location: consulta_clientes.php");
        }

    }
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .w3-bar,
        h1,
        button {
            font-family: "Montserrat", sans-serif
        }
    </style>
</head>

<body id="login">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="inicio.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inicio</a>
            <a href="blog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blog</a>
            <a href="registro_citas_clientes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Programar una cita</a>
            <a class="w3-bar-item w3-button w3-padding-large w3-white">Iniciar sesión</a>

        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="inicio.php" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
            <a href="blog.php" class="w3-bar-item w3-button w3-padding-large">Blog</a>
            <a href="registro_citas_clientes.php" class="w3-bar-item w3-button w3-padding-large">Programar una cita</a>
            <a href="login.php" class="w3-bar-item w3-button w3-padding-large">Iniciar sesión</a>
        </div>
    </div>

    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <div class="login_box">
        <img class="logo" src="Images/logo.jpg" alt="logo">
        <h1>Iniciar sesión</h1>
        <form action="login.php" method="post">

            <!-- USERNAME -->
            <label for="username">Usuario:</label>
            <input type="text" placeholder="Ingresa el usuario" id="username" name="usuario">

            <!-- PASSWORD -->
            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Ingresa la contraseña" id="password" name="contrasenia">

            <input type="submit" value="Ingresar">
            <p>En caso de olvidar su usuario o contraseña, contacte al administrador.</p>

        </form>

    </div>

    <script src="main.js"></script>

</body>

</html>