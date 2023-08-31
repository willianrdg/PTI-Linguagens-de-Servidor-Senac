# PTI Linguagens de Servidor - Senac - 08/2023

**Cálculo IMC em PHP**

A função deverá receber um valor (numérico) de IMC e classificar de acordo com as faixas abaixo:

| Faixa  | Classificação |
| ------ | ------------- |
| Até 18.5 | Magreza |
| De 18.51 a 24.9 | Saudável |
| De 25.0 a 29.9 | Sobrepeso |
| De 30.0 a 34.9 | Obesidade Grau I |
| De 35.0 a 39.9 | Obesidade Grau II |
| Acima de 39.9 | Obesidade Grau II |

*Obs.: Uma vez que o enunciado citava explicitamente a utilização do comando echo para impressão da mensagem e também que o valor de IMC deveria ter 2 casas decimais, utilizei echo + sprintf para exibição do texto com o valor do IMC formatado sempre com 2 casas decimais.*