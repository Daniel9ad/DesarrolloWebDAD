<link rel="stylesheet" href="style.css">

<?php
    $f = $_GET['f'];
    $c = $_GET['c'];
    $tabla = array([1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1]);
    $tabla[$f-1][$c-1] = 2;
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