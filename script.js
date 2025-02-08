document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("gerarPostBtn").addEventListener("click", gerarPost);
});

async function gerarPost() {
    const entrada = document.getElementById('entrada').value;
    const resultadoDiv = document.getElementById('resultado');
    const loadingSpinner = document.getElementById('loadingSpinner');

    resultadoDiv.textContent = '';
    loadingSpinner.classList.remove('d-none'); // Exibe o spinner

    try {
        const response = await fetch('gerar_post.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ prompt: entrada })
        });

        const data = await response.json();

        if (data.generated_text) {
            resultadoDiv.textContent = data.generated_text;
        } else {
            resultadoDiv.textContent = 'Erro ao gerar o post.';
        }
    } catch (error) {
        resultadoDiv.textContent = 'Erro na requisição.';
        console.error('Erro:', error);
    } finally {
        loadingSpinner.classList.add('d-none'); // Esconde o spinner ao finalizar
    }
}
