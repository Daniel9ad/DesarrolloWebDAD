<?php
    include('conexion.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM libros li WHERE li.id=$id";
    $resultado = $con->query($sql);
?>
<?php
while ($row = $resultado->fetch_assoc()) {
    ?>
        <img width="200px" src="../images/<?php echo $row['imagen'];  ?>" alt=""> 
    <?php
}?>