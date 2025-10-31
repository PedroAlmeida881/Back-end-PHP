<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Agendamento</title>
</head>
    <style>
        body{
            text-align: center;
            font-family: Arial;
            background-color: #46e9f5ff;
            padding: 20px;"
        }
         .botao-voltar {
            display: inline-block;
            background-color: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .botao-voltar:hover {
            background-color: #333;
        }
        </style>

    <h2>Resumo do Agendamento:</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $aparelho = $_POST['aparelho'];
        $data = $_POST['data'];
        $problema = $_POST['problema'];

        echo "<p><strong>Nome do cliente:</strong> $nome</p>";
        echo "<p><strong>Telefone:</strong> $telefone</p>";
        echo "<p><strong>Tipo de aparelho:</strong> $aparelho</p>";
        echo "<p><strong>Data preferida:</strong> $data</p>";
        echo "<p><strong>Descrição do problema:</strong> $problema</p>";
    }
    ?>

    <br>
    <a href="Trabalho.php" class="botao-voltar">Voltar</a>

</body>
</html>