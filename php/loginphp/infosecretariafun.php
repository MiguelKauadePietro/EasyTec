<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
  header('Location: login.php');
  exit();
}

$usuarioNome = $_SESSION['usuario_Nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/infosecretaria.css">
    <link rel="stylesheet" href="../../CSS/navresponsiva.css" >
    <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Informações da Secretaria</title>
</head>
<header>
<body>
<nav>
    <a href="pagfun.php"> <img class="logo" src="../../imagens/logob.png"></a>
    <ul>
      <li><a class="HM" href="pagfun.php">Home</a></li>
      <li><a class="PE" href="plantaescolafun">Planta da Escola</a></li>
      <li><a class="HR" href="horariosfun.php">Horários</a></li>
      <li><a class="CP" href="contatoprofFun.php">Contato dos Professores</a></li>
      <li><a class="IS" href="infosecretariafun.php">Informações da Secretaria</a></li>
      <li><a href="logout.php">Sair</a></li>
</ul>
  </nav>

    <p class="msg_boasvindas">Bem-vindo as Informações da secretaria, <?php echo $_SESSION['usuario_Nome']; ?>!</p>

  <div class="carousel-container">
        <div class="carousel">

        <div class="slide">
          <div class="content">
            <div class="contact-info">


                <div class="container_informa">
                <h2>Informações de Contato:</h2>

                            <div class="info_row">
                              <h4>Endereço:</h4><p>Endereço da escola</p>
                            </div>

                            <div class="info_row">
                              <h4>Telefone:</h4><p>Número de telefone da secretaria</p>
                            </div>

                            <div class="info_row">
                              <h4>E-mail:</h4><p>Endereço de e-mail da secretaria</p>
                            </div>

                      </div>

            </div>
          </div>
        </div>
            <div class="slide">

              <div class="content">

                <div class="team">


                  <div class="time">

                      <div class="container_informa">
                      <h2>Equipe da Secretaria:</h2>
              

                            <div class="info_row">
                              <h4>Nome do Funcionário 1:</h4><p>Atendimento ao Aluno</p>
                            </div>

                            <div class="info_row">
                              <h4>Nome do Funcionário 2:</h4><p>Matrículas e Inscrições</p>
                            </div>

                            <div class="info_row">
                              <h4>Nome do Funcionário 3:</h4><p>Documentação</p>
                            </div>

                      </div>


                  </div>

                </div>

              </div>

            </div>
            <div class="slide">
              <div class="content">
                <div class="service-list">


                  <div class="container_informa">
                  <h2>Serviços Oferecidos:</h2>

                            <div class="info_row">
                              <h4>Matrículas e Inscrições:</h4><p>Informações sobre o processo de matrícula e inscrições.</p>
                            </div>

                            <div class="info_row">
                              <h4>Atendimento ao Aluno:</h4><p> Suporte para alunos em questões administrativas.</p>
                            </div>

                            <div class="info_row">
                              <h4>Informações aos Pais</h4><p> Respostas e assistência aos pais e responsáveis.</p>
                            </div>

                      </div>

              </div>
            </div>
          </div>
        </div>
        <button class="btn1" id="prevButton">Anterior</button>
        <button class="btn2" id="nextButton">Próxima</button>
    </div>


  </header>
<footer>
&copy; 2023 Etec Sylvio de Mattos Carvalho | Desenvolvido por Miguel Kauã de Pietro
</footer>

<!-- nav-responsiva parte inferior -->
<div class="responsive-nav">
  <div   <div class="page-menus">
        <a href="pagfun.php"><ion-icon name="home"></ion-icon>
          <h1>Home</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="plantaescolafun"><ion-icon name="navigate-outline"></ion-icon>
          <h1>Planta</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="horariosfun.php"><ion-icon name="time-outline"></ion-icon>
          <h1>Horários</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="contatoprofFun.php"><ion-icon name="people-outline"></ion-icon>
          <h1>Contat</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="infosecretariafun.php"><ion-icon name="information-outline"></ion-icon>
          <h1>Info</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="logout.php"><ion-icon name="exit-outline"></ion-icon>
          <h1>Sair</h1>
        </a>
      </div>
    </div>
      </div>
      <!-- nav-responsiva parte inferior -->
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="navbar.js"></script>
<script src="carrossel.js"></script>

</html>
