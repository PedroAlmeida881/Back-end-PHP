<?php
header("Content-Type: application/json");

// Recebe a mensagem do usuário
$mensagem = $_POST["mensagem"] ?? "";

// 🔑 SUA API KEY GOOGLIADA
$api_key = "AIzaSyCk-48g2ncZ-xb69VCZclCKWgKwU__W3is";

// URL da API
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$api_key";

// PROMPT PRINCIPAL
$prompt_iot = "
Você é um assistente virtual que explica conceitos básicos de enfermagem e IoT.
Use linguagem simples, prática e fácil de entender.
Dê exemplos curtos e diretos.

Pergunta do usuário: $mensagem
";

// Corpo da requisição
$data = [
    "contents" => [
        [
            "parts" => [
                ["text" => $prompt_iot]
            ]
        ]
    ]
];

// Inicializa CURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["resposta" => "❌ Erro ao conectar: " . curl_error($ch)]);
    exit;
}

curl_close($ch);

// Decodifica JSON
$json = json_decode($response, true);

// 🧠 Trata dois formatos possíveis de resposta:

$resposta = "❌ A IA não respondeu.";

// Formato 1 - Resposta padrão
if (isset($json["candidates"][0]["content"]["parts"][0]["text"])) {
    $resposta = $json["candidates"][0]["content"]["parts"][0]["text"];
}
// Formato 2 - Resposta simplificada
elseif (isset($json["candidates"][0]["parts"][0]["text"])) {
    $resposta = $json["candidates"][0]["parts"][0]["text"];
}

echo json_encode(["resposta" => $resposta]);
?>
