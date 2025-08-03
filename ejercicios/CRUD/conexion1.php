<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$basededatos = "tienda";

$conexion = new mysqli($servidor, $usuario, $contraseña, $basededatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

<?php
// cerrar la conexión al final del script
//$conexion->close(); 