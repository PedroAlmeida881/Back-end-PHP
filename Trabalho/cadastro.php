<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Novembro Azul</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2e77c5ff;
            text-align: center;
            padding: 50px;
        }

        form {
            background: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        input {
            margin: 10px;
            padding: 8px;
            width: 200px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* espaço entre os botões */
            margin-top: 15px;
        }

        button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            color: white;
        }

        .cadastrar-btn {
            background-color: #0077ff;
        }

        .cadastrar-btn:hover {
            background-color: #005fcc;
        }

        .login-btn {
            background-color: #000000ff;
        }

        .login-btn:hover {
            background-color: #000000ff;
        }
    </style>
</head>

<body>
    <h1>Campanha Novembro Azul</h1>
    <form action="cadastro.php" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nomeUsuario" required><br>
        <label>CPF:</label><br>
        <input type="text" name="cpfUsuario" minlength="11" maxlength="11" required><br>
        <label>Idade:</label><br>
        <input type="number" name="idadeUsuario" min="1" required><br>

        <!-- Contêiner dos botões -->
        <div class="btn-container">
            <button type="submit" name="cadastrar" class="cadastrar-btn">Cadastrar</button>
            <button type="button" class="login-btn" onclick="window.location.href='login.php'">Ir para Login</button>
        </div>
    </form>

    <?php
    include("conexao.php");

    if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nomeUsuario'];
    $cpf = $_POST['cpfUsuario'];
    $idade = $_POST['idadeUsuario'];
    $dataCadastro = date("Y-m-d");

    // Verifica se o CPF já existe
    $verifica = "SELECT * FROM informacoes WHERE cpf='$cpf'";
    $resultado = $conn->query($verifica);

    if ($resultado->num_rows > 0) {
        echo "<p style='color:red;'>CPF já cadastrado. Faça login ou use outro CPF.</p>";
    } else {
        $sql = "INSERT INTO informacoes (cpf, nome, idade, infcadastro)
                VALUES ('$cpf', '$nome', '$idade', '$dataCadastro')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green;'>Cadastro realizado com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>Erro: " . $conn->error . "</p>";
        }
    }
}
    ?>
</body>

</html>
