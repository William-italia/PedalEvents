<?php

function transformaEmArray($string, $separador, $subseparador, $key1, $key2) {
    $partes = explode($separador, $string); 
    $listaDefinitiva = []; 

    foreach ($partes as $parte) {
        $subPartes = explode($subseparador, $parte); 

        $valor1 = trim($subPartes[0] ?? ''); 
        $valor2 = trim($subPartes[1] ?? '');

        if ($valor1 && $valor2) { 
            $listaDefinitiva[] = [ 
                $key1 => $valor1,
                $key2 => $valor2
            ];
        }
    }

    return $listaDefinitiva; 
}


function formataData($data) {
    $data_evento = $data;
    
    $date = new DateTime($data_evento);
    $data_formatada = $date->format('d/m/Y, h:ia');

    return $data_formatada;
}

?>