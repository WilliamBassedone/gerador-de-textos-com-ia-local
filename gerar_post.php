<?php
// Define o cabeçalho para JSON
header("Content-Type: application/json");

// Lê os dados enviados pelo JavaScript (JSON)
$request = file_get_contents("php://input");
$data = json_decode($request, true);

// Verifica se o campo "prompt" foi enviado
if (!isset($data["prompt"])) {
    echo json_encode(["error" => "Nenhum prompt fornecido."]);
    exit;
}

// Configura a chamada para a API do Ollama
$url = "http://localhost:11434/api/generate";
$body = json_encode([
    "model" => "mistral", // Escolha o modelo: mistral, llama2, openhermes...
    "prompt" => $data["prompt"],
    "stream" => false // Retorna o texto completo de uma vez
]);

$options = [
    "http" => [
        "header" => "Content-Type: application/json",
        "method" => "POST",
        "content" => $body
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Verifica se a resposta é válida
if ($response === false) {
    echo json_encode(["error" => "Falha ao conectar ao servidor de IA."]);
    exit;
}

// Converte a resposta JSON para um array PHP
$response_data = json_decode($response, true);

// Verifica se há um texto gerado
if (isset($response_data["response"])) {
    echo json_encode(["generated_text" => $response_data["response"]]);
} else {
    echo json_encode(["error" => "Erro ao processar a resposta da IA."]);
}
?>
