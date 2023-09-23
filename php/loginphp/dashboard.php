<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
  header('Location: login.php');
  exit();
}

$usuarioNome = $_SESSION['usuario_nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Página inicial/Css/paginainicial.css">
  <link rel="shortcut icon" href="../../cadastro/imagens/EASYTEC.png" type="image/x-icon">
  <title>Página Inicial</title>
</head>
<body>
<header>
  <nav>
    <a href="dashboard.php "> <img class="logo" src="../../Página inicial/imagens/logob.png"></a>
    <ul>
      <li><a class="HM" href="index.html">Home</a></li>
      <li><a class="PE" href="#">Planta da Escola</a></li>
      <li><a class="HR" href="#">Horários</a></li>
      <li><a class="CP" href="#">Contato dos Professores</a></li>
      <li><a class="IS" href="#">Informações da Secretaria</a></li>
      <li><a href="logout.php">Sair</a></li>

  </nav>

  <h2>Bem-vindo, <?php echo $usuarioNome; ?>!</h2>
    <p>Esta é a Página Inicial</p>

  <main>
    <div class="container">
      <!--Primeiro Card-->
      <div class="card" id="card1">
        <ion-icon name="navigate-outline"></ion-icon>
        <h1>Planta da Escola</h1>
        <div class="content">
          <p>Todos os espaços da escola sob um único aspecto.
          </p>
          <a href="#">Ver Planta da Escola</a>
        </div>

      </div>

      <!--Segundo Card-->
      <div class="card" id="card2">
        <ion-icon name="time-outline"></ion-icon>
        <h1>Horários</h1>
        <div class="content">
          <p>Com sua grade curricular sempre em mãos, é mais facil se manter atualizado das mudanças no horário de aulas.</p>
          <a href="#">Ver Horários</a>
        </div>

      </div>

      <!--Terceiro Card-->
      <div class="card" id="card3">
        <ion-icon name="people-outline"></ion-icon>
        <h1>Contato dos Professores</h1>
        <div class="content">
          <p>No caso de alguma dúvida repentina relacionada a aula, é possível contatar os professores fora do horario de aula.
          </p>
          <a href="#">Contate os Professores</a>
        </div>

      </div>

      <!--Quarto Card-->
      <div class="card" id="card4">
        <ion-icon name="information-outline"></ion-icon>
        <h1>Informações Secretaria</h1>
        <div class="content">
          <p>Veja o horário de funcionamento e quais declarações e documentos importantes é possível adquirir na secretária.</p>
          <a href="#">Ver Informações Secretaria</a>
        </div>
      </div>
    </div>
  </main>

 <!--nav responsiva na parte inferior-->
    <div class="nav-responsive">
      
      <div class="navicones foco">
        <a href="./index.html"><ion-icon name="home"></ion-icon>
          <h1>Home</h1>
        </a>
      </div>

      <div class="navicones">
        <a href="#"><ion-icon name="navigate-outline"></ion-icon>
          <h1>Planta</h1>
        </a>
      </div>

      <div class="navicones">
        <a href="#"><ion-icon name="time-outline"></ion-icon>
          <h1>Horários</h1>
        </a>
      </div>

      <div class="navicones">
        <a href="#"><ion-icon name="people-outline"></ion-icon>
          <h1>Contat</h1>
        </a>
      </div>

      <div class="navicones">
        <a href="#"><ion-icon name="information-outline"></ion-icon>
          <h1>Info</h1>
        </a>
      </div>

      <div class="navicones">
        <a href="logout.php"><ion-icon name="exit-outline"></ion-icon>
          <h1>Sair</h1>
        </a>
      </div>
       <!--nav responsiva na parte inferior-->

    </div>
</header>



</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="navbar.js"></script>
</html>