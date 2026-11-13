let numeroSecreto = Math.floor(Math.random() * 100) + 1;
let jogoFinalizado = false;

function verificarPalpite() {
    let campo = document.getElementById("palpite");
    let palpite = Number(campo.value);
    let mensagem = document.getElementById("mensagem");

    if (jogoFinalizado) {
        mensagem.textContent = "Comece um novo jogo!";
    } else if (campo.value.trim() === "" || isNaN(palpite) || palpite < 1 || palpite > 100) {
        mensagem.textContent = "Digite um número entre 1 e 100.";
    } else if (palpite < numeroSecreto) {
        mensagem.textContent = "Tente um número maior!";
    } else if (palpite > numeroSecreto) {
        mensagem.textContent = "Tente um número menor!";
    } else {
        mensagem.textContent = "Parabéns! Você acertou!";
        jogoFinalizado = true;
    }
}

function novoJogo() {
    numeroSecreto = Math.floor(Math.random() * 100) + 1;
    jogoFinalizado = false;

    document.getElementById("palpite").value = "";
    document.getElementById("mensagem").textContent = "Novo jogo! Boa sorte!";
}