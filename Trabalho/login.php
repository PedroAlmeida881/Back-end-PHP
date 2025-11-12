<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Novembro Azul</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #276bb3ff;
            text-align: center;
            padding: 50px;
        }
        form {
            background: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        input, button {
            margin: 10px;
            padding: 8px;
        }
        button {
            background-color: #0077ff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #005fcc;
        }
    </style>
</head>
<body>
    <h2>Login - Novembro Azul</h2>
    <form action="" method="post">
        <label>Digite seu CPF:</label><br>
        <input type="text" name="cpf" minlength="11" maxlength="11" required><br><br>
        <button type="submit" name="entrar">Entrar</button>
    </form>

    <?php
    include("conexao.php");

    if (isset($_POST['entrar'])) {
        $cpf = $_POST['cpf'];

        $sql = "SELECT * FROM informacoes WHERE cpf='$cpf'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<script>
                    window.location.href='consulta.php?cpf=$cpf';
                  </script>";
        } else {
            echo "<p style='color:red;'>CPF não encontrado. Faça o cadastro primeiro.</p>";
            echo "<a href='cadastro.php'>Ir para o cadastro</a>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
