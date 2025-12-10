<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatMundi</title>
    <link rel="icon" href="../images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ilha.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>


</head>

<body>
    <!--Navbar-->

     <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, #8ADEFF, #75EDE6);">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php#home">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php#atividades">Atividades</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php#jogos">Jogos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php#loca">Login / Cadastrar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../perfil.html">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- tabuleiro e menu de contadores -->
    <div class="container mt-4 pt-4">
        <a href="javascript:void(0)" onclick="window.history.back()" class="">
            <i class="bi bi-arrow-left fs-6"></i>
        </a>
         <div id="alerta-container" style="margin-top: 15px;">
        </div>
        <div class="row mt-1">
            <div class="col-sm-12 col-md-12 mt-4">
                <div class="jogo">
                    <table class="tabuleiro">

                        <tr onclick="">
                            <td alt="1. "></td>
                            <td alt="2.a "></td>
                            <td alt="3.a "></td>
                            <td alt="4.a "></td>
                            <td alt="5.a "></td>
                            <td alt="6.a "></td>
                            <td alt="7.a "></td>
                        </tr>

                        <tr onclick="">
                            <td alt="1.b "></td>
                            <td alt="2.b "></td>
                            <td alt="3.b "></td>
                            <td alt="4.b "></td>
                            <td alt="5.b "></td>
                            <td alt="6.b "></td>
                            <td alt="7.b "></td>
                        </tr>

                        <tr onclick="">
                            <td alt="1.c "></td>
                            <td alt="2.c "></td>
                            <td alt="3.c "></td>
                            <td alt="4.c "></td>
                            <td alt="5.c "></td>
                            <td alt="6.c "></td>
                            <td alt="7.c "></td>
                        </tr>

                        <tr onclick="">
                            <td alt="1.d "></td>
                            <td alt="2.d "></td>
                            <td alt="3.d "></td>
                            <td alt="4.d "></td>
                            <td alt="5.d "></td>
                            <td alt="6.d "></td>
                            <td alt="7.d "></td>
                        </tr>

                        <tr onclick="">
                            <td alt="1.e "></td>
                            <td alt="2.e "></td>
                            <td alt="3.e "></td>
                            <td alt="4.e "></td>
                            <td alt="5.e "></td>
                            <td alt="6.e "></td>
                            <td alt="7.e "></td>
                        </tr>

                        <tr onclick="">
                            <td alt="1.f "></td>
                            <td alt="2.f "></td>
                            <td alt="3.f "></td>
                            <td alt="4.f "></td>
                            <td alt="5.f "></td>
                            <td alt="6.f "></td>
                            <td alt="7.f "></td>
                        </tr>
                    </table>

                    <div class="col" style="order: 2;">

                        <div class="row" id="info">

                            <div class="col-md-6 col-sm-6" style="height: 100px;">
                                <div class="contadores">
                                    <div class="cont d-flex align-items-center mt-2">
                                        <img class="icon" src="../images/IlhaDoTesouro/pa (1).png" style="width: 30px;"
                                            alt="">
                                        <h4 class="ms-2" id="pa">0</h4>
                                    </div>
                                    <div class="cont d-flex align-items-center mt-2">
                                        <img class="icon" src="../images/IlhaDoTesouro/erro.png" style="width: 30px;"
                                            alt="">
                                        <h4 class="ms-2" id="cavacoes">0</h4>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-sm-6" style="height: 100px;">
                                <div class="contadores">
                                    <div class="cont d-flex align-items-center mt-2">
                                        <img class="icon" src="../images/IlhaDoTesouro/ampulheta.png"
                                            style="width: 30px;" alt="">
                                        <h4 class="ms-2" id="tempo"></h4>
                                    </div>
                                    <div class="cont d-flex align-items-center mt-2">
                                        <img class="icon" src="../images/IlhaDoTesouro/atencao.png" style="width: 30px;"
                                            alt="">
                                        <h4 class="ms-2" id="erros">0</h4>
                                    </div>
                                </div>
                            </div>

                            <!--CONTAS-->
                            <div class="col-12" id="abacate">
                                <!-- Questão -->
                                <div class="row d-flex align-items-center mt-4" id="conta">
                                    <div class="col-12 text-center">
                                        <div class="quest mb-4">
                                            <h2>10 + 5</h2>
                                        </div>
                                    </div>

                                    <!-- Alternativas -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="alternativas">
                                            <div class="altern d-flex justify-content-center align-items-center mt-2">
                                                <h4 class="ms-2">15</h4>
                                            </div>
                                            <div class="altern d-flex justify-content-center align-items-center mt-2">
                                                <h4 class="ms-2">5</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="alternativas">
                                            <div class="altern d-flex justify-content-center align-items-center mt-2">
                                                <h4 class="ms-2">53</h4>
                                            </div>
                                            <div class="altern d-flex justify-content-center align-items-center mt-2">
                                                <h4 class="ms-2">27</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Pontuação Final -->
    <div class="modal fade" id="modalPontuacao" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-header" style="background: #8ADEFF;">
                    <h5 class="modal-title">Pontuação Final</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center">
                    <h4>⏱️ Tempo: <span id="finalTempo"></span>s</h4>
                    <h4>❌ Erros: <span id="finalErros"></span></h4>
                    <h4>📘 Erros de Conta: <span id="finalErrosConta"></span></h4>
                    <h4>🪓 Pás restantes: <span id="finalPas"></span></h4>
                    <h4>🏆 Pontuação: <span id="pontuacaoFinal"></span></h4>
                    <h5 id="alertLogin" class="text-warning" style="display:none;"></h5>
                </div>


                <div class="modal-footer d-flex justify-content-center">
                    <button id="jogarNovamente" class="btn btn-warning" onclick="reiniciarJogoReal()">Jogar
                        Novamente</button>
                </div>
            </div>
        </div>
    </div>

    </div>
  <!-- jQuery (UMA versão, a completa) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper (necessário pro Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap (UMA versão, a mais estável 4.5.2) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para fechar menu mobile -->
    <script>
        $(document).ready(function() {
            $('.navbar-nav>li>a').on('click', function() {
                $('.navbar-collapse').collapse('hide');
            });
        });
    </script>

    <!-- Seu script principal do jogo -->
    <script src="../js/tesouroD.js"></script>
    <script>
        const usuarioLogado = <?php echo isset($_SESSION['id_usuario']) ? 1 : 0; ?>;
    </script>

</body>


<footer style="margin-top: 60px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="width: 100%; height: auto; display: block;">
        <path fill="#8ADEFF" fill-opacity="1"
            d="M0,224L40,234.7C80,245,160,267,240,266.7C320,267,400,245,480,197.3C560,149,640,75,720,85.3C800,96,880,192,960,218.7C1040,245,1120,203,1200,186.7C1280,171,1360,181,1400,186.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>

    <div class="rodape text-center py-3">
        <div class="row align-items-center">
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <img src="../images/logo.png" class="img-fluid logo" alt="Logo" style="max-height: 80px;">
            </div>
            <div class="col-12 col-md-8">
                <p class="mb-0" style="font-family: 'Coming Soon', cursive; font-size: 15px;">© 2025 Copyright</p>
            </div>
        </div>
    </div>
</footer>

</html>