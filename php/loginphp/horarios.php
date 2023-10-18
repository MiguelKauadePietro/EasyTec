<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/paginainicial.css">
  <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
  <title>Página Inicial</title>
</head>
<body>
<header>
  <nav>
    <a href="dashboard.php "> <img class="logo" src="../../imagens/logob.png"></a>
    <ul>
      <li><a class="HM" href="dashboard.php">Home</a></li>
      <li><a class="PE" href="#">Planta da Escola</a></li>
      <li><a class="HR" href="#">Horários</a></li>
      <li><a class="CP" href="#">Contato dos Professores</a></li>
      <li><a class="IS" href="#">Informações da Secretaria</a></li>
      <li><a href="logout.php">Sair</a></li>

  </nav>

        

 <!--nav responsiva na parte inferior-->
  <div class="navbar">
  <div class="navicones foco">
        <a href="dashboard.php"><ion-icon name="home"></ion-icon>
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
    </div>
      </div>
    <!--nav responsiva na parte inferior-->
</header>



</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="navbar.js"></script>
</html>