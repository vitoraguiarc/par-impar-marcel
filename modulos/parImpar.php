<?php 

/***********************************
 * 
 *  Objetivo: arquivo para criar funções de separações de par e impar
 *  Data: 22/02/2022
 *  Autor:Nathalia Ramos
 *  Versão: 1.0
 ***********************************/
    
 $resultado = numerosParesImpares(5, 14);
 echo("<pre>");
 print_r($resultado);
 echo("</pre>");

//função para separar um sequencia de números pares
 function numerosPares ($numeroInicial, $numeroFinal) {

     //recebe os dados de argumento da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $pares = array();
    $cont = (int) 0;


    while ($numInicial <= $numFinal) {
        
        if($numInicial %2 == 0){ 
            $pares [$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    }
        return $pares;
}
//função para separar um sequencia de números pares
 function numerosImpares ($numeroInicial, $numeroFinal) {

    //recebe os dados de argumento da função
   $numInicial = (int) $numeroInicial;
   $numFinal = (int) $numeroFinal;
   $impares = array();
   $cont = (int) 0;


   while ($numInicial <= $numFinal) {
       
       if($numInicial %2 == 1){ 
           $impares [$cont] = $numInicial;
           $cont++;
       }
       $numInicial++;
   }
       return $impares;
}


function numerosParesImpares ($numeroInicial, $numeroFinal) {
    
    //Recebe os dados dos argumentos da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;

    //Variaveis para a criação dos arrays individuais (pares e impares)
    $pares = array();
    $impares = array();

    //Chama as funções que separam números pares e impares
    //Refatoramento de codigo, chamando a função numerosPares e numerosImpares e atribuindo elas
    $pares = numerosPares($numInicial, $numFinal);
    $impares = numerosImpares($numInicial, $numFinal);
    
    //Criação de um array para armazenamento os dois array individuais (pares e impares)
    //Criação de uma chave dentro de um array chamada "Pares" para identificar a lista dos pares e "Impares" para identificar a lista dos impares
    $paresImpares = array(
        "Pares"    =>  $pares,
        "Impares"  => $impares
    );

    return $paresImpares;

}

?>