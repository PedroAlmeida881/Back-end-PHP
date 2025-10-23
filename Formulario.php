<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
     <style>
        body{
            background-color: darkslategray;
            text-align: center;
        }
        </style>
</head>
<body>
    <h2>Formulário Black Friday 🤑💸 </h2>
    <form action="index.php?campanha=blackfriday&versao=1.0" method="post">
    <label>Nome do produto:</label><br>
    <input type="text" name="nome" required><br><br>
    <labe>Categoria:</label><br>
    <input type="Text" name="categoria" required><br><br>
    <label>Preço R$:</label><br>
    <input type="number" min="0" step="0.01" name="preco" required><br><br>
    <label>Quantidade em estoque:</label><br>
    <input type="number" min="0" step="1" name="quantidade" required><br><br>
    <button type="submit">Cadastrar produto</button>
    </form>
</body>
</html> 