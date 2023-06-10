<?php
    $m = $_GET['m'];
    $n = $_GET['n'];
?>
<style>
    td{
        width: 20px;
        height: 20px;
        border: 1px solid black;
    }
</style>
<table>
   <?php for ($i=0;$i<$m;$i++) { ?>
    <tr>
        <?php for ($j=0;$j<$n;$j++)
        {
            echo "<td></td>";
        }
        ?>
    </tr>
   <?php } ?>
</table>