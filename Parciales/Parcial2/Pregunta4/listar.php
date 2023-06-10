<?php
if (!isset($_GET['orden'])) {
    $orden = 'li.id';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%".str_replace(" ","%",$_GET['buscar'])."%'";
}

include('conexion.php');
#$sql = "SELECT * FROM libros";
$sql = "SELECT * FROM editoriales edi 
left join libros li on edi.id=li.ideditorial left join usuarios us on us.id=li.idusuario
left join carreras ca on ca.id=li.idcarrera
order by $orden
";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table>
        <tr>
            <th>Imagen</th>
            <th><a href="javascript:listarF()">Titulo</a></th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Anio</th>
            <th>Usuario</th>
            <th>Carrera</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><img width="60px" src="../images/<?php echo $row['imagen'];  ?>" alt=""> </td>
            <td><?php echo $row['titulo'] ?> </td>
            <td><?php echo $row['autor'] ?></td>
            <td><?php echo $row['editorial'] ?></td>
            <td><?php echo $row['anio'] ?></td>
            <td><?php echo $row['usuario'] ?></td>
            <td><?php echo $row['carrera'] ?></td>
            </tr>
        <?php } ?>
    </table>
<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}

$con->close();
?>