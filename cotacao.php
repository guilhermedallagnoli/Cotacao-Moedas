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
$dadosCotacao = $obEconomia->consultarCotacao($moedaA, $moedaB);

//AJUSTA O RESPONSE DOS DADOS
$dadosCotacao = $dadosCotacao[$moedaA . $moedaB] ?? [];

//IMPRIME O RETORNO DA COTAÇÃO
echo 'Moedas: ' . $moedaA . ' -> ' . $moedaB . "\n";
echo 'Compra: ' . ($dadosCotacao['bid'] ?? 'Desconhecido') . "\n";
echo 'Venda: ' . ($dadosCotacao['ask'] ?? 'Desconhecido') . "\n";