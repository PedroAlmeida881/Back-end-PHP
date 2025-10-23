<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <style>
        body{
            background-color: darkslategray;
            text-align: center;
        }
        </style>
</head>
<body>
     <h2> Informações do produto!</h2>
     <?php
     if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nomedoproduto = $_POST["nome"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];
        $quantidade = $_POST["quantidade"];
        echo "<h3> Dados Recebidos (POST)</h3>";
        echo "Nome do produto: $nomedoproduto<br>";
        echo "Categoria: $categoria<br>";
        echo "Preço: $preco<br>";
        echo "Quantidade: $quantidade<br>";
    } else {
        echo "<p style='color:red;'>Nenhum dado enviado via POST.</p>";
    }    
     if (isset($_GET["campanha"]) && isset($_GET["versao"])) {
        $campanha = $_GET["campanha"];
        $versao = $_GET["versao"];

        echo "<hr>";
        echo "<h3>Informações da Campanha (GET)</h3>";
        echo "Campanha: <strong>$campanha</strong><br>";
        echo "Versão do Formulário: <strong>$versao</strong><br>";
    } else {
        echo "<p style='color:red;'>Parâmetros de campanha e/ou versão não informados na URL.</p>";
    }
    ?>
</body>
</html>