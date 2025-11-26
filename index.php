   <?php
    session_start();
    include("class/Conectar.php");

    $erroLogin = ""; // mensagem pra exibir no form

    if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["tipo"] ?? "") === "login") {

        $email = $_POST["txtemail"] ?? "";
        $senha = $_POST["txtsenha"] ?? "";

        // Prepara consulta
        $sql = $conexao->prepare("SELECT * FROM usuario WHERE email_usuario = ? AND senha_usuario = ?");
        $sql->bind_param("ss", $email, $senha);
        $sql->execute();
        $resultado = $sql->get_result();

        if ($resultado->num_rows == 1) {
            // Login OK
            $usuario = $resultado->fetch_assoc();
            $_SESSION["id_usuario"] = $usuario["id_usuario"];
            $_SESSION["email_usuario"] = $usuario["email_usuario"];

            header("Location: home.php"); // mesma pasta
            exit;
        } else {
            // Login errado = mostra mensagem no form
            $erroLogin = "Email ou senha incorretos!";
        }
    }
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
                       <img src="images/mascotes_500px.png" class="img-fluid" alt="">
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
                   <div class="col-md-12 col-sm-12">
                       <div class="caroteiner" id="caro">
                           <button class="carobtn prev" aria-label="Anterior">&#10094;</button>
                           <div class="caroinner">
                               <div class="caroitem" style="background: #C2A8FF;">
                                   <h1>1°</h1>
                                   <a href="" class="btn">Acessar Atividades</a>
                               </div>
                               <div class="caroitem" style="background: #FFFBB5;">
                                   <h1>2°</h1>
                                   <a href="" class="btn">Acessar Atividades</a>
                               </div>
                               <div class="caroitem" style="background: #FFA09D;">
                                   <h1>3°</h1>
                                   <a href="" class="btn">Acessar Atividades</a>
                               </div>
                               <div class="caroitem" style="background: #75EDE6;">
                                   <h1>4°</h1>
                                   <a href="" class="btn">Acessar Atividades</a>
                               </div>
                               <div class="caroitem" style="background: #8ADEFF;">
                                   <h1>5°</h1>
                                   <a href="atividades5.html" class="btn">Acessar Atividades</a>
                               </div>
                           </div>
                           <button class="carobtn next" aria-label="Próximo">&#10095;</button>
                       </div>
                   </div>
               </div>
           </div>
       </section>

       <!--JOGOS-->
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
           <path fill="#92C992" fill-opacity="1"
               d="M0,224L60,234.7C120,245,240,267,360,256C480,245,600,203,720,208C840,213,960,267,1080,256C1200,245,1320,171,1380,133.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
           </path>
       </svg>
       <section class="jogos" style="background: #92C992;" id="jogos">
           <div class="container py-5 text-center">
               <h2>Jogos</h2>

               <div class="row g-4 justify-content-center">

                   <div class="col-md-4 col-sm-6 d-flex py-3 justify-content-center">
                       <div class="card" style="width: 18rem;">
                           <img class="card-img-top img-fluid" src="images/IlhaDoTesouro/Ilha do tesouro logo.png" alt="">
                           <div class="card-body">
                               <a href="Ilha do Tesouro/ilha.html" class="btn btn-dark w-100">Jogar Agora</a>
                           </div>
                       </div>
                   </div>

                   <div class="col-md-4 col-sm-6 d-flex py-3  justify-content-center">
                       <div class="card" style="width: 18rem;">
                           <img class="card-img-top img-fluid" src="images/jogo em dev.jpeg" alt="">
                           <div class="card-body">
                               <a href="#" class="btn btn-dark w-100">Jogar Agora</a>
                           </div>
                       </div>
                   </div>

                   <div class="col-md-4 col-sm-6 d-flex py-3 justify-content-center">
                       <div class="card" style="width: 18rem;">
                           <img class="card-img-top img-fluid" src="images/jogo em dev.jpeg" alt="">
                           <div class="card-body">
                               <a href="#" class="btn btn-dark w-100">Jogar Agora</a>
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

       <section class="loca" id="loca">
           <div class="container py-5">
               <div class="row justify-content-center align-items-center g-5">

                   <!-- Entrar -->
                   <div class="col-lg-4 col-md-5 col-sm-12 py-4 d-flex flex-column align-items-center">
                       <h2>Entrar</h2>

                       <form class="login-form" method="POST" autocomplete="off">
                           <input type="hidden" name="tipo" value="login">

                           <label>
                               <p><i class="bi bi-person"></i> Email</p>
                               <input type="email" name="txtemail" placeholder="Email do Usuário" required>
                           </label>

                           <label>
                               <p><i class="bi bi-lock"></i> Senha</p>
                               <input type="password" name="txtsenha" placeholder="Senha" required>
                           </label>

                           <button type="submit">Entrar</button>
                           <p style="color:red;"><?php echo $erroLogin; ?></p>
                       </form>
                   </div>



                   <!-- Linha vertical (aparece só no lg e acima) -->
                   <div class="col-lg-1 d-none d-lg-flex justify-content-center">
                       <div class="vertical-line"></div>
                   </div>

                   <!-- Cadastrar -->


                   <?php
                    include("class/Conectar.php");

                    $mensagem = ""; // mostrar o retorno na mesma página

                    if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["tipo"] ?? "") === "cadastro") {
                        $nome = $_POST["txtnome"] ?? "";
                        $email = $_POST["txtemail"] ?? "";
                        $senha = $_POST["txtsenha"] ?? "";

                        if ($nome != "" && $email != "" && $senha != "") {

                            // Verifica se o email já existe
                            $sql_check = "SELECT * FROM usuario WHERE email_usuario = '$email'";
                            $resultado_check = $conexao->query($sql_check);

                            if ($resultado_check->num_rows > 0) {
                                $mensagem = "Este email já está cadastrado!";
                            } else {
                                $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario)
                    VALUES ('$nome', '$email', '$senha')";

                                if ($conexao->query($sql) === TRUE) {
                                    $mensagem = "Usuário cadastrado com sucesso!";
                                } else {
                                    $mensagem = "Erro ao cadastrar: " . $conexao->error;
                                }
                            }
                        } else {
                            $mensagem = "Preencha todos os campos!";
                        }
                    }
                    ?>

                   <div class="col-lg-4 col-md-5 col-sm-12 py-4 d-flex flex-column align-items-center">
                       <h2>Cadastrar</h2>

                       <form class="cadastro-form" method="POST" autocomplete="off">
                           <input type="hidden" name="tipo" value="cadastro">

                           <label>
                               <p><i class="bi bi-person"></i> Nome</p>
                               <input type="text" name="txtnome" placeholder="Nome de Usuário" required>
                           </label>

                           <label>
                               <p><i class="bi bi-envelope-at"></i> Email</p>
                               <input type="email" name="txtemail" placeholder="Email" required>
                           </label>

                           <label>
                               <p><i class="bi bi-lock"></i> Senha</p>
                               <input type="password" name="txtsenha" placeholder="Senha" required>
                           </label>

                           <button type="submit">Cadastrar</button>
                           <p><?php echo $mensagem; ?></p>
                       </form>
                   </div>

               </div>
           </div>
       </section>
       <script>
           (function() {
               const caro = document.getElementById('caro');
               const inner = caro.querySelector('.caroinner');
               const items = caro.querySelectorAll('.caroitem');
               const prevBtn = caro.querySelector('.carobtn.prev');
               const nextBtn = caro.querySelector('.carobtn.next');

               const cardsPerView = 3; // fixo: 3 cards sempre
               const totalItems = items.length;
               let currentIndex = 0;

               function updatecaro() {
                   const style = window.getComputedStyle(inner);
                   const gap = parseInt(style.gap) || 0;
                   const itemWidth = items[0].offsetWidth + gap;

                   const maxIndex = totalItems - cardsPerView;

                   if (currentIndex > maxIndex) currentIndex = 0;
                   if (currentIndex < 0) currentIndex = maxIndex;

                   const translateX = -itemWidth * currentIndex;
                   inner.style.transform = `translateX(${translateX}px)`;
               }

               prevBtn.addEventListener('click', () => {
                   currentIndex--;
                   updatecaro();
               });

               nextBtn.addEventListener('click', () => {
                   currentIndex++;
                   updatecaro();
               });

               updatecaro();
           })();
       </script>

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