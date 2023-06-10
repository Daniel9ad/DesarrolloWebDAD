<?php
    include('conexion.php');
    $sql = "SELECT * FROM libros";
    $resultado = $con->query($sql);
?>
<div>
    <select id="listaTitulos" onchange=cambiarImagen(event)>
    <?php
    while ($row = $resultado->fetch_assoc()) {
    ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['titulo']; ?></option>
    <?php
    }?>
    </select>
</div>
<div id="conImagen">
    <img width="200px" src="../images/introduccioinformatica.jpg" alt=""> 
</div>