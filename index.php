<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Post com IA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container mt-5">

    <h2 class="text-center">Gerador de Post com IA</h2>

    <div class="mb-3">
        <label for="entrada" class="form-label">Escreva um tópico ou ideia para o post:</label>
        <textarea class="form-control" id="entrada" placeholder="Digite aqui..." rows="4"></textarea>
    </div>

    <button id="gerarPostBtn" class="btn btn-primary w-100">Gerar Post</button>

    <div class="text-center mt-3">
        <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status">
            <span class="visually-hidden">Gerando...</span>
        </div>
    </div>

    <h3 class="mt-4">Resultado:</h3>
    <div id="resultado" class="border p-3 rounded bg-light"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
