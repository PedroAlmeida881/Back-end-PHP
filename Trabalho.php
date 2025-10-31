<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Agendamento de Conserto</title>
</head>
    <style>
    body {
            background-color: #46e9f5ff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            height: 100vh; 
            margin: 0;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        input, select, textarea {
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
<body>
    <h2> Agendamento de Conserto de Eletrodomésticos </h2>
    <form action="recebe.php" method="post">
    <label>Nome do cliente:</label><br>
    <input type="text" name="nome" required><br><br>
    <label>Telefone para contato:</label><br>
    <input type="number" name="telefone" required><br><br>
     <label>Tipo de aparelho:</label><br>
        <select name="aparelho" required>
            <option value="">Selecione</option>
            <option value="Geladeira">Geladeira</option>
            <option value="Micro-ondas">Micro-ondas</option>
            <option value="Máquina de lavar">Máquina de lavar</option>
            <option value="Fogão">Fogão</option>
        </select><br><br>
    <label>Data:</label><br>
        <input type="date" name="data" required><br><br>

        <label>Descrição do problema:</label><br>
        <textarea name="problema" rows="4" cols="30" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>