<?php
session_start();

if (!isset($_SESSION['usuario_id']) || $_SESSION['funcao'] != "fun") {
  header('Location: login.php');
  exit();
}

$usuarionome = $_SESSION['usuario_Nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/paginainicial.css">
  <link rel="stylesheet" href="../../CSS/navresponsiva.css">
  <link rel="stylesheet" href="../../CSS/slide.css">
  <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
  <title>Página Inicial</title>
</head>
<body>
<header>
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

  <h2>Seja bem-vindo aos Horários, <?php echo $_SESSION['usuario_Nome']; ?>!</h2>

  <main>
    <div class="container">
      <!--Primeiro Card-->
      <div class="card" id="card1">
        <ion-icon name="navigate-outline"></ion-icon>
        <h1>Planta da Escola</h1>
        <div class="content">
          <p>Todos os espaços da escola sob um único aspecto. <br><br><br><br><br>
          </p>
          <a href="plantaescolafun.php">Ver Planta da Escola</a>
        </div>

      </div>

      <!--Segundo Card-->
      <div class="card" id="card2">
        <ion-icon name="time-outline"></ion-icon>
        <h1>Horários</h1>
        <div class="content">
          <p>Com sua grade curricular sempre em mãos, é mais facil se manter atualizado das mudanças no horário de aulas. <br><br><br></p>
          <a href="horariosfun.php">Ver Horários</a>
        </div>

      </div>

      <!--Terceiro Card-->
      <div class="card" id="card3">
        <ion-icon name="people-outline"></ion-icon>
        <h1>Contato dos Professores</h1>
        <div class="content">
          <p>No caso de alguma dúvida repentina relacionada a aula, é possível contatar os professores fora do horario de aula. <br>
          </p>
          <a href="contatoprofFun.php">Contate os Professores</a>
        </div>

      </div>

      <!--Quarto Card-->
      <div class="card" id="card4">
        <ion-icon name="information-outline"></ion-icon>
        <h1>Informações Secretaria</h1>
        <div class="content">
          <p>Veja o horário de funcionamento e quais declarações e documentos importantes é possível adquirir na secretária. <br></p>
          <a href="inforsecretariaFun.php">Ver Informações Secretaria</a>
        </div>
      </div>
    </div>
  </main>

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
</header>



</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="navbar.js"></script>
</html>