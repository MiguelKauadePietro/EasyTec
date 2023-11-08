<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
  header('Location: login.php');
  exit();
}

$usuarioNome = $_SESSION['usuario_Nome'];
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
    <a href="contatoprofProf"> <img class="logo" src="../../imagens/logob.png"></a>
    <ul>
      <li><a class="HM" href="contatoprofProf.php">Home</a></li>
      <li><a class="PE" href="plantaescolaprof">Planta da Escola</a></li>
      <li><a class="HR" href="horariosprof.php">Horários</a></li>
      <li><a class="CP" href="contatoprofProf.php">Contato dos Professores</a></li>
      <li><a class="IS" href="infosecretariaprof.php">Informações da Secretaria</a></li>
      <li><a href="logout.php">Sair</a></li>
</ul>
  </nav>

  <h2>Seja bem-vindo(a) à Planta da Escola, Professor(a) <?php echo $_SESSION['usuario_Nome']; ?>!</h2>




  <main> 
    <h3>Clique no botão abaixo para baixar a imagem da Planta da Escola</h3>
    <button id="downloadButton">Baixar Imagem PNG</button>
  </main>


</header>

    <footer>
        &copy; 2023 Etec Sylvio de Mattos Carvalho | Desenvolvido por Miguel Kauã de Pietro
    </footer>

<!-- nav-responsiva parte inferior -->
<div class="responsive-nav">
  <div class="page-menus">
        <a href="pagprof.php"><ion-icon name="home"></ion-icon>
          <h1>Home</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="plantaescolaprof"><ion-icon name="navigate-outline"></ion-icon>
          <h1>Planta</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="horariosprof.php"><ion-icon name="time-outline"></ion-icon>
          <h1>Horários</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="contatoprofProf.php"><ion-icon name="people-outline"></ion-icon>
          <h1>Contat</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="infosecretariaprof.php"><ion-icon name="information-outline"></ion-icon>
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
<script src="baixarplanta.js"></script>
</html>