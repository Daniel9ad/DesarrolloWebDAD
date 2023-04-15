<link rel="stylesheet" href="style.css">

<?php

class Examen{
    public $cadena1;
    public $cadena2;
    function __construct($cadena1, $cadena2)
    {
        $this->cadena1=$cadena1;
        $this->cadena2=$cadena2;
    }

    function Cruzar(){
        $inter1=0;
        $inter2=0;
        for($i=0; $i<=strlen($this->cadena1)-1; $i++){
            for($j=0; $j<=strlen($this->cadena2)-1; $j++){
                if ($this->cadena1[$i]==$this->cadena2[$j]){
                    $inter1 = $j;
                    $inter2 = $i;
                    break;
                }
            }
        }
        if ($inter1==0){
            echo "no existen letras comunes";
        }else{
            ?>
            <table>
            <?php
            $cc1 = 0;
            $cc2 = 0;
            for($i=0; $i<=strlen($this->cadena2)-1; $i++){
                echo '<tr>';
                for($j=0; $j<=strlen($this->cadena1)-1; $j++){
                    if ($j==$inter2){
                        echo '<td class="c1">'.$this->cadena2[$cc1].'</td>';
                        $cc1+=1;
                        if ($i==$inter1){
                            $cc2+=1;
                        }
                    }else if($i==$inter1){
                        echo '<td class="c1">'.$this->cadena1[$cc2].'</td>';
                        $cc2+=1;
                    }else{
                        echo '<td class="c"></td>';
                    }
                }
                echo "</tr>";
            }
            ?>
            </table>
            <?php
        }
    }
}


?>