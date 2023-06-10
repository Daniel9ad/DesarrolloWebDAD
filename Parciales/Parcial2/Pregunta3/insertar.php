<?php
$archivo = $_POST['archivo'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['idEditorial'];
$anio = $_POST['anio'];
$usuario = $_POST['usuario'];
$carrera = $_POST['carrera'];

include('conexion.php');

$sql = "INSERT into libros (imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera)
VALUES ('$archivo','$titulo','$autor','$editorial','$anio','$usuario','$carrera')";

if ($con->query($sql) === TRUE) {
    echo "<div>";
    echo "Se creo el registro correctamente <br>";
    #echo "imagen: $archivo <br>";
    #echo "titulo: $titulo <br>";
    echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>