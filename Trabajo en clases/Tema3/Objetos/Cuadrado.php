<?php

class Cuadrado implements IFigura{
    public $lado;

    function __construct($lado){
        $this->lado = $lado;
    }

    function CalcularArea(){
        return $this->lado*$this->lado;
    }
}

?>