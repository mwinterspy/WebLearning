<?php
    $listaNumeros = [];
    $listaNumeroDivisiveis=[];

    for($i=0; $i<=50; $i++){
        
        if($i%10==0){
            $listaNumeros[] = $i;

        }
        else{
            
            $listaNumerosDivisiveis[]=$i;
        }
        
    }
    echo "<h1>Lista de numero não divisiveis por 10</h1>";
    foreach($listaNumeros as $numero){
        
        echo $numero;
        echo "<br>";
    }

?>