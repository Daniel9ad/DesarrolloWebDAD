<link rel="stylesheet" href="style.css">

<?php
    $tabla = array([1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1]);
?>

<table>
    <?php
    foreach($tabla as $fila){
        echo '<tr>';
        foreach($fila as $col){
            echo '<td class="c'.$col.'"></td>';
        }   
        echo "</tr>";
    }
    ?>
</table>

<form action="marcar.php"  method="get">
    <div>
        <label for="fila">Fila:</label>
        <input type="number" name="f">
    </div>
    <div>
        <label for="columna">Columna:</label>
        <input type="number" name="c">
    </div>
    <input type="submit" value="Enviar">
</form>