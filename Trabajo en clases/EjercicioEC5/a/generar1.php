<?php
    include('conexion.php');
    $sql = "SELECT * FROM departamentos";
    $resultado = $con->query($sql);
?>
<?php
while ($row = $resultado->fetch_assoc()) {
?>
    <option value="<?php echo $row['id']?>"><?php echo $row['nombre']; ?></option>
<?php
}?>