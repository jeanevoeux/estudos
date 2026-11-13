<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Saudação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Formulário de Saudação</h1>
        <p>Preencha seus dados abaixo.</p>
        <form action="processar.php" method="POST" id="formulario">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" placeholder="Digite sua idade" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="modal" id="modal">
        <div class="modal-conteudo">
            <h2>Confirmar envio</h2>
            <p>Deseja enviar seus dados?</p>
            <div class="botoes">
                <button type="button" id="cancelar">Cancelar</button>
                <button type="button" id="confirmar">Confirmar</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>