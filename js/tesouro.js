document.addEventListener("DOMContentLoaded", function () {

    // 📌 VARIÁVEIS DO JOGO

    const cells = document.querySelectorAll("table.tabuleiro td");
    const imagemTesouro = "../images/IlhaDoTesouro/tesouro.png";
    const imagemErro = "../images/IlhaDoTesouro/fechar.png";

    let indexTesouro = Math.floor(Math.random() * cells.length);

    const colunas = 7;
    const linha = Math.floor(indexTesouro / colunas) + 1;
    const coluna = (indexTesouro % colunas) + 1;

    console.log("Tesouro:", indexTesouro);
    console.log(`📍 Linha ${linha}, Coluna ${coluna}`);

    const erroSpan = document.getElementById("cavacoes");
    const timerSpan = document.getElementById("tempo");
    const paSpan = document.getElementById("pa");

    let erros = 0;
    let segundos = 0;
    let encontrouTesouro = false;

    // Timer
    let timer = setInterval(() => {
        segundos++;
        timerSpan.textContent = segundos;
    }, 1000);

    // 📢 Função de alerta

    function mostrarAlerta(mensagem, tipo = "info") {
        const alertaContainer = document.getElementById("alerta-container");
        alertaContainer.innerHTML = `
            <div class="alert alert-${tipo}" role="alert" style="font-size: 1.2em;">
                ${mensagem}
            </div>`;
    }

    //  Função de nova conta


    const contaH2 = document.querySelector('#conta h2');
    const alternativas = document.querySelectorAll('#conta .altern');
    const errosEl = document.getElementById('erros');

    function novaConta() {
        if (encontrouTesouro) return;

        const operacoes = ['+', '-'];
        const oper = operacoes[Math.floor(Math.random() * operacoes.length)];

        let num1 = Math.floor(Math.random() * 41) + 10;
        let num2 = Math.floor(Math.random() * 41) + 10;

        if (oper === '-') {
            if (num2 > num1) [num1, num2] = [num2, num1];
        }

        let respostaCerta = oper === '+' ? num1 + num2 : num1 - num2;

        contaH2.textContent = `${num1} ${oper} ${num2}`;
        contaH2.setAttribute('data-certa', respostaCerta);

        // gerar alternativas
        const respostas = new Set([respostaCerta]);
        while (respostas.size < 4) {
            const variacao = Math.floor(Math.random() * 9) - 4;
            const alt = respostaCerta + variacao;
            if (alt >= 0) respostas.add(alt);
        }

        const arr = [...respostas].sort(() => Math.random() - 0.5);

        alternativas.forEach((alt, i) => {
            alt.querySelector('h4').textContent = arr[i];
        });
    }

    //  CLICK NAS ALTERNATIVAS


    alternativas.forEach(alt => {
        alt.style.cursor = "pointer";

        alt.addEventListener('click', () => {
            if (encontrouTesouro) return;

            const valor = parseInt(alt.querySelector('h4').textContent);
            const certa = parseInt(contaH2.getAttribute('data-certa'));
            let paAtual = parseInt(paSpan.textContent);
            let errosAtual = parseInt(errosEl.textContent);

            if (valor === certa) {
                paAtual++;
                paSpan.textContent = paAtual;
                mostrarAlerta('✅ Acertou! +1 pá', "success");
            } else {
                errosAtual++;
                errosEl.textContent = errosAtual;
                mostrarAlerta('❌ Errou! +1 erro', "danger");
            }

            novaConta();
        });
    });

    novaConta();


    // CLICK NO TABULEIRO


    cells.forEach((cell, index) => {
        cell.addEventListener("click", function () {

            if (cell.classList.contains("clicado") || encontrouTesouro) return;

            let paAtual = parseInt(paSpan.textContent);
            if (paAtual <= 0) {
                mostrarAlerta("❌ Você não tem mais pás!", "warning");
                return;
            }

            cell.classList.add("clicado");
            paAtual--;
            paSpan.textContent = paAtual;

            const img = document.createElement("img");
            img.style.maxWidth = "80%";
            img.style.maxHeight = "80%";

            if (index === indexTesouro) {

                img.src = imagemTesouro;
                cell.appendChild(img);

                encontrouTesouro = true;
                clearInterval(timer);

                setTimeout(() => {
                    // preencher dados do modal
                    document.getElementById("finalTempo").textContent = segundos;
                    document.getElementById("finalErros").textContent = erros;
                    document.getElementById("finalPas").textContent = paAtual;

                    $('#modalPontuacao').modal('show');
                }, 300);

            } else {
                img.src = imagemErro;
                cell.appendChild(img);
                erros++;
                erroSpan.textContent = erros;
            }

        });
    });

    //  Botão Jogar Novamente


    document.getElementById("jogarNovamente")?.addEventListener("click", () => {
        location.reload();
    });

});
