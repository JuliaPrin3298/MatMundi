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
       <title>MatMundi</title>
       <link rel="icon" href="images/logo.png" type="image/png" />
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
           integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
       <link rel="stylesheet" href="css/css-novo.css" />
       <link rel="preconnect" href="https://fonts.googleapis.com" />
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
       <link
           href="https://fonts.googleapis.com/css2?family=Chewy&family=Cherry+Bomb+One&family=Press+Start+2P&family=Coming+Soon&display=swap"
           rel="stylesheet" />
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
       <script src="js/script.js"></script>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   </head>

   <body>
       <!--Navbar-->
       <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(to right, #8ADEFF, #75EDE6);">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="index.php#home">Home</a>
                   </li>
                   <li class="nav-item active">
                       <a class="nav-link" href="index.php#atividades">Atividades</a>
                   </li>
                   <li class="nav-item active">
                       <a class="nav-link" href="index.php#jogos">Jogos</a>
                   </li>
                   <li class="nav-item active">
                       <a class="nav-link" href="index.php#loca">Login / Cadastrar</a>
                   </li>
                   <li class="nav-item active">
                       <a class="nav-link" href="perfil.html">Perfil</a>
                   </li>
               </ul>
           </div>
       </nav>

       <!--Home-->

       <section class="home d-flex align-items-center" style="background:#FFFAB4;" id="home">
           <div class="container p-4">
               <div class="row w-100 align-items-center">

                   <div class="masc col-3 col-md-3 d-flex justify-content-center">
                       <img src="images/rick quadro.png" class="img-fluid" alt="">
                   </div>

                   <div class="slogan col-6 col-md-7 d-flex justify-content-center text-center">
                       <h1>
                           Onde a matemática vira brincadeira,<br>
                           a diversão se multiplica <br>
                           e os números fazem festa!
                       </h1>
                   </div>

                   <div class="logo col-3 col-md-2 d-flex justify-content-center">
                       <img src="images/logo.png" class="img-fluid" alt="">
                   </div>

               </div>
           </div>
       </section>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
           <path fill="#FFFAB4" fill-opacity="1"
               d="M0,192L48,192C96,192,192,192,288,186.7C384,181,480,171,576,176C672,181,768,203,864,224C960,245,1056,267,1152,256C1248,245,1344,203,1392,181.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
           </path>
       </svg>

       <!--ATIVIDADES-->
       <section class="atividades" id="atividades">
           <div class="container text-center">
               <h2>Atividades</h2>
               <div class="row">
                   <div class="col-md-12 col-sm-12 py-4">
                       <p>
                           Aqui, os chefes do 5º ano vão aprender matemática preparando pizzas incríveis! <br>
                           Cada desafio é uma receita especial, cheia de continhas para somar, dividir, multiplicar e muito
                           mais. <br>
                           É só escolher a receita e começar a cozinhar! Conforme você avança, os desafios vão ficando mais
                           apimentados <br>
                           Só os mestres pizzaiolos conseguem resolver as questões ninjas! Pronto para se tornar o melhor
                           pizzaiolo da turma? <br>
                           <br>
                       </p>


                   </div>
               </div>
           </div>
       </section>

       <!--Atividades-->
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
           <path fill="#92C992" fill-opacity="1"
               d="M0,224L60,234.7C120,245,240,267,360,256C480,245,600,203,720,208C840,213,960,267,1080,256C1200,245,1320,171,1380,133.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
           </path>
       </svg>
       <section class="jogos" style="background: #92C992;" id="jogos">
           <div class="container py-5 text-center">
               <p style="font-family: 'Press Start 2P';">Vamos começar a aventura matemática na pizzaria!</p>

               <div class="row g-4 justify-content-center">

                   <div class="col-md-4 col-sm-6 d-flex py-3 justify-content-center">
                       <div class="card" style="width: 18rem;">
                           <img class="card-img-top img-fluid" src="images/Atv 5/Atv 1 5°.jpeg" alt="">
                           <div class="card-body">
                               <h5 class="card-title">Atividade 1 </h5>
                               <p class="card-text">Soma e Massa</p>
                               <a href="Atividades/5/1.html" class="btn btn-dark"">Jogar</a>
                        </div>
                       </div>
                   </div>

                   <div class=" col-md-4 col-sm-6 d-flex py-3 justify-content-center">
                                   <div class="card" style="width: 18rem;">
                                       <img class="card-img-top img-fluid" src="images/Atv 5/Atv 2 5°.jpeg"
                                           alt="Imagem de capa do card">
                                       <div class="card-body">
                                           <h5 class="card-title">Atividade 2 </h5>
                                           <p class="card-text"> Frações</p>
                                           <a href="Atividades/5/2.html" class="btn btn-dark"">Jogar</a>
                        </div>
                       </div>
                   </div>

                   <div class=" col-md-4 col-sm-6 d-flex py-3 justify-content-center">
                                               <div class="card" style="width: 18rem;">
                                                   <img class="card-img-top img-fluid" src="images/Atv 5/Atv 3 5°.jpeg"
                                                    alt="Imagem de capa do card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Atividade 3 </h5>
                                                    <p class="card-text">Sistema Monetário</p>
                                                    <a href="" class="btn btn-dark">Jogar</a>
                                                </div>
                                               </div>
                                       </div>

                                   </div>
                           </div>
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

   <footer>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="width: 100%; height: auto; display: block;">
           <path fill="#8ADEFF" fill-opacity="1"
               d="M0,224L40,234.7C80,245,160,267,240,266.7C320,267,400,245,480,197.3C560,149,640,75,720,85.3C800,96,880,192,960,218.7C1040,245,1120,203,1200,186.7C1280,171,1360,181,1400,186.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
           </path>
       </svg>

       <div class="rodape text-center py-3" style="background: #8ADEFF;">
           <div class="row align-items-center">
               <div class="col-12 col-md-4 mb-3 mb-md-0">
                   <img src="images/logo.png" class="img-fluid logo" alt="Logo" style="max-height: 80px;">
               </div>
               <div class="col-12 col-md-8">
                   <p class="mb-0" style="font-family: 'Coming Soon', cursive; font-size: 15px;">© 2025 Copyright</p>
               </div>
           </div>
       </div>
   </footer>



   </html>