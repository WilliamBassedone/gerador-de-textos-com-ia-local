# Gerador de Post com IA Local (Ollama + PHP)

Este projeto permite gerar textos automaticamente usando um modelo de IA rodando localmente com **Ollama** e uma interface simples em **PHP, JavaScript e Bootstrap**.

## 🚀 Funcionalidades
- Interface web para entrada de prompts
- Conexão com IA local via **Ollama**
- Geração de textos automaticamente
- Funciona totalmente offline
- **Interface melhorada com Bootstrap**
- **Spinner de carregamento para feedback ao usuário**

---

## 📦 Tecnologias Utilizadas
- **PHP** (Back-end para comunicação com a IA)
- **JavaScript (Fetch API + Event Listeners)** (Front-end para envio de requisições)
- **Bootstrap 5** (Estilização e responsividade)
- **Ollama AI** (Servidor local de IA)
- **Modelo de IA**: `mistral` (pode ser alterado para `llama2`, `openhermes`, etc.)

---

## 📥 Instalação e Configuração
### **1. Instalar o Ollama**
O Ollama permite rodar modelos de IA localmente. Baixe e instale:

🔗 [Baixar Ollama](https://ollama.com/)

Após a instalação, verifique se está funcionando com:
```bash
ollama --version
```

### **2. Baixar um modelo de IA**
O modelo utilizado pode ser alterado conforme necessidade. Para baixar o `mistral`, use:
```bash
ollama pull mistral
```
Outros modelos disponíveis:
- `llama2`
- `openhermes`
- `gemma`

### **3. Iniciar o Servidor Ollama**
Antes de usar o projeto, inicie o servidor da IA com:
```bash
ollama serve
```

### **4. Configurar o Servidor Local PHP**
Certifique-se de que você tem o **PHP** instalado no seu sistema. Se ainda não tem, baixe no site oficial:
🔗 [https://www.php.net/downloads](https://www.php.net/downloads)

Agora, inicie um servidor local na pasta do projeto:
```bash
php -S localhost:8000
```

---

## 📜 Como Usar
1. Abra o **index.php** no navegador acessando:
   ```
   http://localhost:8000/index.php
   ```
2. Digite um tópico ou ideia no campo de entrada
3. Clique em "Gerar Post"
4. Aguarde a resposta da IA enquanto o **spinner de carregamento** é exibido

---

## 📂 Estrutura do Projeto
```
📂 gerador-de-posts-ai/
 ├── 📄 index.php         # Interface principal com Bootstrap
 ├── 📄 style.css         # Estilos CSS
 ├── 📄 script.js         # Lógica JavaScript com spinner
 ├── 📄 gerar_post.php    # Comunicação com a IA
 ├── 📄 README.md         # Documentação
```

---

## ⚙️ Personalização
Se quiser mudar o modelo de IA, edite o arquivo `gerar_post.php`:
```php
"model" => "mistral" // Troque para "llama2", "openhermes", etc.
```

Se precisar aumentar o limite de caracteres na geração de texto, edite o parâmetro `max_length` no código PHP antes de enviar ao Ollama.

---

## 🛠️ Possíveis Erros e Soluções
❌ **Erro: Falha ao conectar ao servidor de IA.**
✅ Solução: Verifique se o **Ollama está rodando** (`ollama serve`)

❌ **Erro: Modelo não encontrado.**
✅ Solução: Baixe o modelo desejado (`ollama pull mistral`)

❌ **Erro ao gerar post.**
✅ Solução: Verifique se o PHP está rodando (`php -S localhost:8000`)

❌ **Erro: Pouca memória RAM (menos de 8GB).**
✅ Solução: Use um modelo mais leve (`gemma`) ou aumente a swap do servidor.

---

## 📃 Repositório no GitHub
🔗 Repositório oficial: [Gerador de Textos com IA Local](https://github.com/WilliamBassedone/gerador-de-textos-com-ia-local)
🔗 Criado por: [WilliamBassedone](https://github.com/WilliamBassedone)

---

## 📜 Licença
Este projeto é licenciado sob a licença **MIT**. Para mais detalhes, consulte o arquivo `LICENSE`. 🚀

