<?php
class Operaciones{
    private $a;
    private $b;
    
    function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    function suma(){
        return $this->a+$this->b;
    }

    function resta(){
        return $this->a-$this->b;
    }

    function multiplicacion(){
        return $this->a*$this->b;
    }

    function divicion(){
        return $this->a/$this->b;
    }
}
?>