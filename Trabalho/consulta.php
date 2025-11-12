<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consultar - Novembro Azul</title>
    <style>
        body {
            background-color: #2e65a3ff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        ul {
            text-align: left;
            display: inline-block;
        }

        button {
            background: #0077ff;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background: #005fcc;
        }
    </style>
</head>
<body>

    <h2>Dicas de Prevenção - Novembro Azul</h2>

    <?php
    include("conexao.php");

    if (isset($_GET['cpf'])) {
        $cpf = $_GET['cpf'];

        $sql = "SELECT * FROM informacoes WHERE cpf='$cpf'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $dados = $result->fetch_assoc();
            echo "<h3>Bem-vindo, " . $dados['nome'] . "!</h3>";
            echo "<ul>
                    <li>Realize o exame preventivo regularmente.</li>
                    <li>Mantenha uma alimentação saudável e equilibrada.</li>
                    <li>Pratique atividades físicas regularmente.</li>
                    <li>Evite o consumo excessivo de álcool e o tabagismo.</li>
                    <li>Converse com seu médico sobre o exame de próstata.</li>
                  </ul>";
        } else {
            echo "<p style='color:red;'>CPF não encontrado. Faça o cadastro primeiro.</p>";
        }

        $conn->close();
    } else {
        echo "<p>CPF não informado. Volte ao <a href='login.php'>login</a>.</p>";
    }
    ?>
</body>
</html>
