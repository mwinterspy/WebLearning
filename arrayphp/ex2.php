<?php

$numeros = [];
$maior = 0;
$menor = 1000;
for($i=0; $i<=50; $i++){
    $numeros[] = rand(0, 1000);
}
var_dump($numeros);

foreach($numeros as $numero){
    if($numero>$maior && $numero>$menor){
        $maior = $numero;
    }
    if($numero<$menor && $numero<$menor){
        $menor = $numero;
    }
}

echo "<br>O maior número é: ".$maior;
echo "<br>O menor número é: ".$menor;


?>