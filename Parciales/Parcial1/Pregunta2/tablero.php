<link rel="stylesheet" href="style.css">

<?php
    $fila = $_GET['fila'];
    $col = $_GET['columna'];
    $color = $_GET['color'];
    $nombre = $_GET['nombre'];
    $tabla = array([1,0,1,0,1],
    [0,1,0,1,0],
    [1,0,1,0,1],
    [0,1,0,1,0],
    [1,0,1,0,1]);
    $tabla[$fila-1][$col-1] = 2;
?>

<table>
    <?php
    foreach($tabla as $fila){
        echo '<tr>';
        foreach($fila as $col){
            if ($col==2){
            ?>
                <td class=<?php echo "c".$col;?> style=<?php echo "background-color:".$color;?>>
                    <div>
                        <?php echo $nombre; ?>
                    </div>
                    <div>
                        <img src="Archivos/Bowser.png" width="60" height="60">
                    </div>
                </td>
            <?php
            }else{
                echo '<td class="c'.$col.'"></td>';
            }
        }   
        echo "</tr>";
    }
    ?>
</table>