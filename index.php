<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cotação de Moedas</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site para consulta de cotação de moedas">
    <meta name="author" content="Guilherme">
</head>

<body>

    <h1>Consultar Cotação de Moedas:</h1>

    <form id="cotacao" action="cotacao.php">
        <label for="moeda">Escolha a moeda:</label>
        <select id="moedaA" name="moedaA">
            <option id="USD" value="USD">USD</option>
            <option id="BRL" value="BRL">BRL</option>
            <option id="BTC" value="BTC">BTC</option>
            <option id="EUR" value="EUR">EUR</option>
        </select>
        <select id="moedaB" name="moedaB">
            <option id="USD" value="USD">USD</option>
            <option id="BRL" value="BRL">BRL</option>
            <option id="BTC" value="BTC">BTC</option>
            <option id="EUR" value="EUR">EUR</option>
        </select>
        <input type="submit">
    </form>

    <h1>Consultar Fechamento de Moedas:</h1>

    <form id="fechamento" action="fechamento.php">
        <label for="moeda">Escolha a moeda:</label>
        <select id="moedaA" name="moedaA">
            <option id="USD" value="USD">USD</option>
            <option id="BRL" value="BRL">BRL</option>
            <option id="BTC" value="BTC">BTC</option>
            <option id="EUR" value="EUR">EUR</option>
        </select>
        <select id="moedaB" name="moedaB">
            <option id="USD" value="USD">USD</option>
            <option id="BRL" value="BRL">BRL</option>
            <option id="EUR" value="EUR">EUR</option>
        </select>
        <input type="submit">
    </form>

</body>

</html>