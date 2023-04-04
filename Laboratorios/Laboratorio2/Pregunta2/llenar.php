<form action="eliminar.php" method="get">
<?php
    $n = $_GET["n"];
    for ($i = 1; $i<=$n; $i++){
        echo '<input type="number" name="valor[]"><br>';
    }
    echo '<label for="Mayor">Elemento mayor:</label>';
    echo '<input type="number" name="mayor">';
?>
    <input type="submit" value="Enviar">
</form>