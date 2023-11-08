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
    <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/contactprof.css">
    <link rel="stylesheet" href="../../CSS/paginainicial.css">
    <link rel="stylesheet" href="../../CSS/navresponsiva.css">
    <title>Contato dos Professores</title>
</head>
<header>
<body>

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
  <br>
  <h2>Contato dos Professores</h2>
  <h2>Seja bem-vindo ao Contato dos Professores, Professor(a) <?php echo $_SESSION['usuario_Nome']; ?>!</h2>
  <br>
    <table>
        <tr>
            <th>Nome do Professor</th>
            <th>E-mail</th>
         
        </tr>
        <tr>
            <td>Professor 1</td>
            <td><a id="emailprof" href="mailto:professor1@example.com">professor1@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 2</td>
            <td><a id="emailprof" href="mailto:professor2@example.com">professor2@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 3</td>
            <td><a id="emailprof" href="mailto:professor3@example.com">professor3@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 4</td>
            <td><a id="emailprof" href="mailto:professor4@example.com">professor4@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 5</td>
            <td><a id="emailprof" href="mailto:professor5@example.com">professor5@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 6</td>
            <td><a id="emailprof" href="mailto:professor6@example.com">professor6@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 7</td>
            <td><a id="emailprof" href="mailto:professor7@example.com">professor7@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 8</td>
            <td><a id="emailprof" href="mailto:professor8@example.com">professor8@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 9</td>
            <td><a id="emailprof" href="mailto:professor9@example.com">professor9@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 10</td>
            <td><a id="emailprof" href="mailto:professor10@example.com">professor10@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 11</td>
            <td><a id="emailprof" href="mailto:professor11@example.com">professor11@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 12</td>
            <td><a id="emailprof" href="mailto:professor12@example.com">professor12@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 13</td>
            <td><a id="emailprof" href="mailto:professor13@example.com">professor13@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 14</td>
            <td><a id="emailprof" href="mailto:professor14@example.com">professor14@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 15</td>
            <td><a id="emailprof" href="mailto:professor15@example.com">professor15@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 16</td>
            <td><a id="emailprof" href="mailto:professor16@example.com">professor16@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 17</td>
            <td><a id="emailprof" href="mailto:professor17@example.com">professor17@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 18</td>
            <td><a id="emailprof" href="mailto:professor18@example.com">professor18@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 19</td>
            <td><a id="emailprof" href="mailto:professor19@example.com">professor19@exemplo.com</a></td>
        </tr>
        <tr>
            <td>Professor 20</td>
            <td><a id="emailprof" href="mailto:professor20@example.com">professor20@exemplo.com</a></td>
        </tr>

        
    </table>
    <br>
  </header>
  <footer>
        &copy; 2023 Etec Sylvio de Mattos Carvalho |  Desenvolvido por Miguel Kauã de Pietro
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
</html>