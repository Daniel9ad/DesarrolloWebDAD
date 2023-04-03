<h1>Arreglos</h1>
<?php
    $lista = array(1,2,3,4);
    $lista2 = array('a','b',3,4);
    #var_dump($lista);
    #var_dump($lista2);

    foreach($lista2 as $valor){
        print($valor."<br>");
    }

    function Funcion1(){
        return "Hola mundo";
    }

    print(Funcion1());
?>