<?php

require __DIR__ . '/vendor/autoload.php';

// DEPENDÊNCIAS
use \App\Awesome\Economia;

//INSTÂNCIA DA CLASSE DE API
$obEconomia = new Economia;

/* //VERIFICA OS ARGUMENTOS
    if (!isset($argv[2])) {
        die('É necessário enviar duas moedas!');
    } 
*/

//MOEDAS
$moedaA = isset($_GET["moedaA"])?$_GET["moedaA"]:"Nenhuma moeda selecionada :(";
$moedaB = isset($_GET["moedaB"])?$_GET["moedaB"]:"Nenhuma moeda selecionada :(";

//EXECUTA A REQUISIÇÃO NA API
$dadosFechamento = $obEconomia->consultarUltimosFechamentos($moedaA, $moedaB);

//IMPRIME O RETORNO DA COTAÇÃO
echo 'Moedas: ' . $moedaA . ' -> ' . $moedaB . "\n";

//ITERA OS DADOS DOS FECHAMENTOS
foreach ($dadosFechamento as $fechamento) {
    //OUTPUT
    $output = [
        date('Y-m-d', $fechamento['timestamp']),
        number_format($fechamento['bid'], 4, '.', ''),
        number_format($fechamento['ask'], 4, '.', '')
    ];

    //IMPRIME O RESULTADO
    echo implode(' | ', $output) . "\n";
}
