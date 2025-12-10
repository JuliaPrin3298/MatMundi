   <?php
    session_start();
    include("class/Conectar.php");

    include_once __DIR__ . '/class/Listar.php';

    $cat = new Listar();
    $dados = $cat->listarTop(10);
    //var_dump($dados); // só pra testar

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MatMundi – 2º Ano</title>
    <link rel="icon" href="images/logo.png" type="image/png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- CSS padrão MatMundi -->
    <link rel="stylesheet" href="css/css-novo.css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Cherry+Bomb+One&family=Press+Start+2P&family=Coming+Soon&display=swap" rel="stylesheet" />
     <script src="js/script.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top"
         style="background: linear-gradient(to right, #8ADEFF, #75EDE6);">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#atividades">Atividades</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#jogos">Jogos</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#loca">Login / Cadastrar</a></li>
                <li class="nav-item"><a class="nav-link" href="perfil.html">Perfil</a></li>
            </ul>
        </div>
    </nav>
    <!-- HOME -->
    <section class="home d-flex align-items-center" style="background:#FFFAB4;" id="home">
        <div class="container p-4">
            <div class="row w-100 align-items-center">

                <div class="col-3 d-flex justify-content-center">
                    <img src="images/rick quadro.png" class="img-fluid" alt="">
                </div>

                <div class="col-6 text-center">
                    <h1>
                        Onde a matemática vira brincadeira,<br>
                        a diversão se multiplica <br>
                        e os números fazem festa!
                    </h1>
                </div>

                <div class="col-3 d-flex justify-content-center">
                    <img src="images/logo.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- Curva -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFFAB4"
              d="M0,192L48,192C96,192,192,192,288,186.7C384,181,480,171,576,176C672,181,768,203,864,224C960,245,1056,267,1152,256C1248,245,1344,203,1392,181.3L1440,160V0H0Z"/>
    </svg>

    <!-- SEÇÃO EXPLICATIVA DO 2º ANO -->
    <section class="atividades" id="atividades">
        <div class="container text-center">

            <h2>Atividades – 2º Ano</h2>

            <p style="max-width: 800px; margin: 0 auto;">
                Aqui, os confeiteiros do 2° ano vão aprender matemática contando,
                somando e organizando doces deliciosos! <br>
                Cada desafio traz uma situação divertida dentro da doceria. <br>
                Escolha a atividade e divirta-se enquanto aprende!
            </p>

        </div>
    </section>
    <!-- Curva verde -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#92C992"
              d="M0,224L60,234.7C120,245,240,267,360,256C480,245,600,203,720,208C840,213,960,267,1080,256C1200,245,1320,171,1380,133.3L1440,96V320H0Z"/>
    </svg>

    <!-- JOGOS -->
    <section class="jogos" style="background:#92C992;" id="jogos">
        <div class="container py-5 text-center">

            <p style="font-family: 'Press Start 2P';">
                Escolha um desafio da doceria!
            </p>
            <br>
            <div class="row g-4 justify-content-center">

                <!-- ATIVIDADE 1 -->
                <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                    <div class="card" style="width: 15rem; height: 25rem;">
                        <img src="images/atv2/atv1 2°.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Atividade 1</h5>
                            <p class="card-text">Doces e Quantidades</p>
                            <a href="Atividades/2/1.html" class="btn btn-dark">Jogar</a>
                        </div>
                    </div>
                </div>

                <!-- ATIVIDADE 2 -->
                <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                    <div class="card" style="width: 15rem; height: 25rem;">
                        <img src="images/atv2/atv2 2°.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Atividade 2</h5>
                            <p class="card-text">Dividindo Doces</p>
                            <a href="" class="btn btn-dark">Jogar</a>
                        </div>
                    </div>
                </div>

                <!-- ATIVIDADE 3 -->
                <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                    <div class="card" style="width: 15rem; height: 25rem;">
                        <img src="images/atv2/atv2 3°.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Atividade 3</h5>
                            <p class="card-text">Doces para Revender</p>
                            <a href="" class="btn btn-dark">Jogar</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <br>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
           <path fill="#92C992" fill-opacity="1"
               d="M0,224L48,208C96,192,192,160,288,138.7C384,117,480,107,576,117.3C672,128,768,160,864,192C960,224,1056,256,1152,234.7C1248,213,1344,139,1392,101.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
           </path>
       </svg>

       <!--RAnking geral de jogos-->

       <section class="top-rank">
           <div class="container py-4 text-center">
               <h2>Ranking Geral de Jogos</h2>
               <div class="row py-3">
                   <table class="table table-sm" id="top-rank">
                       <thead class="thead">
                           <tr>
                               <th>Posição</th>
                               <th>Nome</th>
                               <th>Jogo</th>
                               <th>Pontuação</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php
                            if (!empty($dados)) {
                                $pos = 1;
                                foreach ($dados as $mostrar) {
                                    echo "<tr>";
                                    echo "<td>{$pos}</td>";
                                    echo "<td>{$mostrar['nome_usuario']}</td>";
                                    echo "<td>{$mostrar['nome_jogo']}</td>";
                                    echo "<td>{$mostrar['pontuacao']}</td>";
                                    echo "</tr>";
                                    $pos++;
                                }
                            } else {
                                echo "<tr><td colspan='4'>Nenhuma pontuação registrada</td></tr>";
                            }
                            ?>
                       </tbody>
                   </table>
               </div>
           </div>
       </section>

       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

       <script>
           $(document).ready(function() {
               $('.navbar-nav>li>a').on('click', function() {
                   $('.navbar-collapse').collapse('hide');
               });
           });
       </script>
   </body>

    <!-- Footer -->
    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="width:100%; display:block;">
            <path fill="#8ADEFF"
                  d="M0,224L40,234.7C80,245,160,267,240,266.7C320,267,400,245,480,197.3C560,149,640,75,720,85.3C800,96,880,192,960,218.7C1040,245,1120,203,1200,186.7C1280,171,1360,181,1400,186.7L1440,192V320H0Z"/>
        </svg>

        <div class="rodape text-center py-3" style="background:#8ADEFF;">
            <div class="row align-items-center">
                <div class="col-md-4"><img src="images/logo.png" style="max-height:80px;"></div>
                <div class="col-md-8"><p style="font-family:'Coming Soon';">© 2025 Copyright</p></div>
            </div>
        </div>
    </footer>
</html>
