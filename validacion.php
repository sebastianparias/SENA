<?php

$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
session_start();
$_SESSION['usuario'] = $usuario;


//conexión
require("datos_conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
if (!$conexion) {
    die("No se ha podido conectar con la base de datos");
}

$consulta = "SELECT * FROM EMPLEADOS WHERE USUARIO_EMPLEADO = '$usuario' AND CONTRASENIA_EMPLEADO = '$contrasenia'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['usuario_empleado'] == 'admin') {
    header("location:consulta_empleados.php");
} elseif ($filas['usuario_empleado'] != 'admin') {
    header("location:consulta_citas.php");
} else {
    include("login.php");
?>
    <h1>Error en la autenticación</h1>
<?php
}


mysqli_free_result($resultado);
mysqli_close($conexion);

?>