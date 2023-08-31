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

    //echo "Atenção, seu IMC é $imc, e você está classificado com $classificacaoIMC";
    echo sprintf('Atenção, seu IMC é %0.2f, e você está classificado com %s',$imc,$classificacaoIMC); //exibir nº formatado com 2 casas decimais
}

classificarIMC(25.30); //mesmo exemplo do enunciado, deve exibir a mensagem “Atenção, seu IMC é 25.30, e você está classificado com sobrepeso”
?>