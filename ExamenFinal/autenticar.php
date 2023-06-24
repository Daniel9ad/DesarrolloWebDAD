<?php 
session_start();
$correo = $_POST['usuario'];
$contrasena = sha1($_POST['contrasena']);

include('conexion.php');
$sql = "SELECT nombre,correo_electronico,contrasena FROM usuarios WHERE correo_electronico='$correo' AND contrasena='$contrasena'";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['correo'] = $fila['correo_electronico'];
?>
    Conexion con exito
    <meta http-equiv="refresh" content="2; url=index.html" />
<?php
} else {
?>
    Error contraseña no valida
    <meta http-equiv="refresh" content="2; url=login.html" />
<?php
}
?>