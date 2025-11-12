<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "aluno", "noazul", "3307");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
