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
  <div class="table-responsive">
  <table class="table table-striped">
  <thead>
    <tr>
    <?php

    //Conexão com o Banco de Dados
    include_once("conexaologin.php");

    //Comando SQL para buscar os usuários inativos
    $stmt = "select * from usuarios where funcao = 'pro';";

    //Executando o comando SQL
    $resultado = mysqli_query($conexao, $stmt);

    //Verificando se from encontrado resultados
    if (mysqli_num_rows($resultado) > 0) {
        while ($usuario = mysqli_fetch_assoc($resultado)) {
            echo
                '<tr>
        <th scope="row">' . $usuario['Nome'] . '</th>
        <td>' . $usuario['Email'] . '</td>
      </tr>';
        }

    } else {
        echo "<tr><td colspan = '5'>Nenhum professor encontrado</td></tr>";
    }

    //Fechando o BD
    mysqli_close($conexao);

    ?>
    </tr>
  </tbody>
</table>
</div>
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