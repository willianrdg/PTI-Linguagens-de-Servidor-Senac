<?php
function classificarIMC($imc) {
    $tabelaIMC = [
        '18.5' => "Magreza",
        '24.9' => "Saudável",
        '29.9' => "Sobrepeso",
        '34.9' => "Obesidade Grau I",
        '39.9' => "Obesidade Grau II"        
    ];   

    $classificacaoIMC = "Obesidade Grau III";
    foreach ($tabelaIMC as $faixa => $classificacao) {
        if ($imc <= $faixa) {
            $classificacaoIMC = $classificacao;
            break;
        }
    }

    echo "Atenção, seu IMC é $imc, e você está classificado como $classificacaoIMC";
}
?>