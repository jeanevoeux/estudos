const botao = document.getElementById("botao");
const texto = document.getElementById("texto");
const autor = document.getElementById("autor");

botao.addEventListener("click", buscarDitado);

async function buscarDitado() {
    texto.textContent = "Buscando ditado...";
    autor.textContent = "";

    try {
        const resposta = await fetch("https://ditado-api.fly.dev/ditados/random");
        const dados = await resposta.json();
        texto.textContent = dados.content;
        autor.textContent = dados.meaning;
    } catch (erro) {
        texto.textContent = "Não foi possível buscar um ditado.";
    }
}