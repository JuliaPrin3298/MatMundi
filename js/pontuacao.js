const url = new URLSearchParams(window.location.search);
const dificuldade = url.get("dif"); // facil, medio ou dificil

if (dificuldade === "facil") id_jogo = 1;
if (dificuldade === "medio") id_jogo = 2;
if (dificuldade === "dificil") id_jogo = 3;

function salvarPontuacao() {

    let pontuacaoFinal = (parseInt(paSpan.textContent) * 10)
                       - (erros * 2)
                       - (parseInt(document.getElementById("cavacoes").textContent) * 3)
                       - segundos;

    const dados = new FormData();
    dados.append("pontuacao", pontuacaoFinal);
    dados.append("id_jogo", id_jogo);

    fetch("../php/salvarPontuacao.php", {
        method: "POST",
        body: dados
    })
    .then(r => r.text())
    .then(resp => {
        console.log("Servidor:", resp);
    });
}

