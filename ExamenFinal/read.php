<?php
include('conexion.php');
$sql = "SELECT id,nombre,descripcion,precio,stock,imagen FROM productos";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
  <table>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Imagen</th>
    </tr>
    <?php while ($row = $resultado->fetch_assoc()) {
    ?>
      <tr>
        <td><?php echo $row['id'] ?> </td>
        <td><?php echo $row['nombre'] ?></td>
        <td><?php echo $row['descripcion'] ?></td>
        <td><?php echo $row['precio'] ?></td>
        <td><?php echo $row['stock'] ?></td>
        <td><img width="100px" src="images/<?php echo $row['imagen']; ?>"> </td>
        <td>
          <a href="javascript:editar('<?php echo $row['id'] ?>')">Insertar</a>
        <?php } ?>
        </td>
      </tr>

  </table>
<?php
} else {
  echo "nohay datos que mostrar";
}
?>