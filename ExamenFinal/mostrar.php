<?php
include('conexion.php');
$sql = "SELECT id,nombre,direccion,correo_electronico,telefono,imagen FROM clientes";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
<style>
    .ConT{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .tarjeta{
        background-color: #0a4db3;
        width: 200px;
        padding: 10px;
        margin-bottom: 10px;
        margin-left: 10px;
        text-align: center;
        border: 1px solid black;
    }
</style>
    <div class="ConT">
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <div class="tarjeta">
                <img width="180px" height="180px" src="images/<?php echo $row['imagen']; ?>"><br>
                <h3><?php echo $row['nombre'] ?><br></h3>
                Correo electronico: <?php echo $row['correo_electronico'] ?><br>
                Telefono: <?php echo $row['telefono'] ?><br>
                Direccion: <?php echo $row['direccion'] ?>
             </div>
        <?php }?>
    </div>
<?php
} else {
  echo "nohay datos que mostrar";
}
?>