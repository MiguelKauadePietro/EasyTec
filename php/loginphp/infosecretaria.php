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
    <title>Informações da Secretaria</title>
</head>
<body>
<nav>
    <a href="dashboard.php "> <img class="logo" src="../../imagens/logob.png"></a>
    <ul>
      <li><a class="HM" href="dashboard.php">Home</a></li>
      <li><a class="PE" href="#">Planta da Escola</a></li>
      <li><a class="HR" href="horarios.php">Horários</a></li>
      <li><a class="CP" href="contatoprof.php">Contato dos Professores</a></li>
      <li><a class="IS" href="infosecretaria.php">Informações da Secretaria</a></li>
      <li><a href="logout.php">Sair</a></li>
</ul>
  </nav>

  

<div class="container">
    <div class="contact-info">
    <h1>Secretaria da Escola [Nome da Escola]</h1>

    <p class="msg_boasvindas">Bem-vindo as Informações da secretaria, <?php echo $_SESSION['usuario_Nome']; ?>!</p>

        <h2>Informações de Contato:</h2>
        <p><strong>Endereço:</strong> [Endereço da escola]</p>
        <p><strong>Telefone:</strong> [Número de telefone da secretaria]</p>
        <p><strong>E-mail:</strong> <a href="mailto:[Endereço de e-mail da secretaria]">[Endereço de e-mail da secretaria]</a></p>
    </div>

    <div class="service-list">
        <h2>Serviços Oferecidos:</h2>
        <ul class = "lista-servico">
            <li><strong>Matrículas e Inscrições:</strong> Informações sobre o processo de matrícula e inscrições.</li>
            <li><strong>Atendimento ao Aluno:</strong> Suporte para alunos em questões administrativas.</li>
            <li><strong>Documentação:</strong> Solicitação de documentos acadêmicos e registros.</li>
            <li><strong>Informações para Pais:</strong> Respostas a perguntas e assistência para pais e responsáveis.</li>
            <li><strong>Outros Serviços:</strong> Qualquer outro serviço oferecido pela secretaria.</li>
        </ul>
    </div>

    <div class="team">
        <h2>Equipe da Secretaria:</h2>
        <ul class="time">
            <li><strong>[Nome do Chefe da Secretaria]:</strong> Chefe da Secretaria</li>
            <li><strong>[Nome do Funcionário 1]:</strong> Atendimento ao Aluno</li>
            <li><strong>[Nome do Funcionário 2]:</strong> Matrículas e Inscrições</li>
            <li><strong>[Nome do Funcionário 3]:</strong> Documentação</li>
            <li><strong>[Nome do Funcionário 4]:</strong> Atendimento aos Pais</li>
        </ul>
    </div>

    
        
</div>
<footer>
&copy; 2023 Etec Sylvio de Mattos Carvalho | Desenvolvido por Miguel Kauã de Pietro
</footer>
<!-- nav-responsiva parte inferior -->
<div class="responsive-nav">
  <div   <div class="page-menus">
        <a href="dashboard.php"><ion-icon name="home"></ion-icon>
          <h1>Home</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="#"><ion-icon name="navigate-outline"></ion-icon>
          <h1>Planta</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="horarios.php"><ion-icon name="time-outline"></ion-icon>
          <h1>Horários</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="contatoprof.php"><ion-icon name="people-outline"></ion-icon>
          <h1>Contat</h1>
        </a>
      </div>

        <div class="page-menus">
        <a href="infosecretaria.php"><ion-icon name="information-outline"></ion-icon>
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
