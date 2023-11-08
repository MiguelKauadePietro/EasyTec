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
  <link rel="stylesheet" href="../../CSS/horarios.css">
  <link rel="stylesheet" href="../../CSS/paginainicial.css">
  <link rel="stylesheet" href="../../CSS/navresponsiva.css">
  <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Horários</title>
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

  <br>
  <h2>Seja bem-vindo aos Horários, Professor(a) <?php echo $_SESSION['usuario_Nome']; ?>!</h2>
  <br>

  <h3>3A2 - Lado A</h3>
  <br>

  <div class="table-responsive">
  <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="row">Hora</th>
      <th scope="row">Segunda-feira</th>
      <th scope="row">Terça-feira</th>
      <th scope="row">Quarta-feira</th>
      <th scope="row">Quinta-feira</th>
      <th scope="row">Sexta-feira</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">07:10</th>
      <td>Marcelo(Espanhol)</td>
      <td>Gabriel(Matemática)</td>
      <td>Leandro(MCN)</td>
      <td>Edvaldo(Ed.Física)</td>
      <td>Alexandre(Inglês)</td>
    </tr>
    <tr>
      <th scope="row">08:00</th>
      <td>Marcelo(Espanhol)</td>
      <td>Gabriel(Matemática)</td>
      <td>Leandro(MCN)</td>
      <td>Edvaldo(Ed.Física)</td>
      <td>Alexandre(Inglês)</td>
    </tr>
    <tr>
      <th scope="row">08:50</th>
      <td>Sano(LPMM)</td>
      <td>Mayara(Química)</td>
      <td>Leandro(MCN)</td>
      <td>Rosana(ECO)</td>
      <td>Vanessa(Geografia)</td>
    </tr>
  </tbody>

<thead class="thead">
    <tr>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10:00</th>
      <td scope="col">Sano(LPMM)</td>
      <td>Luís(P.D.T.C.C)</td>
      <td>Samael(OI)</td>
      <td>Vanessa(Geografia)</td>
      <td>Fábio(LPL)</td>
    </tr>
    <tr>
      <th scope="row">10:50</th>
      <td>Sano(LPMM)</td>
      <td>Luís(P.D.T.C.C)</td>
      <td>Samael(OI)</td>
      <td>Vanessa(Geografia)</td>
      <td>Cristina(História)</td>
    </tr>
    <tr>
    <thead class="thead">
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
    </tr>
    </thead>
    <tr>
      <th scope="row">13:00</th>
      <td>Fábio(LPL)</td>
      <td>Fernando(Física)</td>
      <td>Fábio(LPL)</td>
      <td>Rogério(AUT II)</td>
      <td>Gabriel(Matemática)</td>
    </tr>
    <tr>
      <th scope="row">13:50</th>
      <td>Ana Carolina(Biologia)</td>
      <td>Fernando(Física)</td>
      <td>Rogério(SAE)</td>
      <td>Rogério(AUT II)</td>
      <td>Fábio(LPL)</td>
    </tr>
    <tr>
      <th scope="row">14:40</th>
      <td>Gabriel(Matemática)</td>
      <td>Mayara(Química)</td>
      <td>Rogério(SAE)</td>
      <td>Rogério(AUT II)</td>
      <td>Ana Carolina(Biologia)</td>
    </tr>
  </tbody>
</table>
</div>
    <br>
    <h3>3A2 - Lado B</h3>
    <br>

    <div class="table-responsive">
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="row">Hora</th>
      <th scope="row">Segunda-feira</th>
      <th scope="row">Terça-feira</th>
      <th scope="row">Quarta-feira</th>
      <th scope="row">Quinta-feira</th>
      <th scope="row">Sexta-feira</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">07:10</th>
      <td>Marcelo(Espanhol)</td>
      <td>Gabriel(Matemática)</td>
      <td>Rogério(AUT II)</td>
      <td>Edvaldo(Ed.Física)</td>
      <td>Alexandre(Inglês)</td>
    </tr>
    <tr>
      <th scope="row">08:00</th>
      <td>Marcelo(Espanhol)</td>
      <td>Gabriel(Matemática)</td>
      <td>Rogério(AUT II)</td>
      <td>Edvaldo(Ed.Física)</td>
      <td>Alexandre(Inglês)</td>
    </tr>
    <tr>
      <th scope="row">08:50</th>
      <td>Leandro(MCN)</td>
      <td>Mayara(Química)</td>
      <td>Rogério(AUT II)</td>
      <td>Rosana(ECO)</td>
      <td>Vanessa(Geografia)</td>
    </tr>
  </tbody>

<thead class="thead">
    <tr>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10:00</th>
      <td>Leandro(MCN)</td>
      <td>Rogério(SAE)</td>
      <td>Samael(OI)</td>
      <td>Vanessa(Geografia)</td>
      <td>Fábio(LPL)</td>
    </tr>
    <tr>
      <th scope="row">10:50</th>
      <td>Leandro(MCN)</td>
      <td>Rogério(SAE)</td>
      <td>Samael(OI)</td>
      <td>Cristina(História)</td>
      <td>Cristina(História)</td>
    </tr>
    <tr>
    <thead class="thead">
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
      <th scope="col">Almoço(11:40 - 13:00)</th>
    </tr>
    </thead>
    <tr>
      <th scope="row">13:00</th>
      <td>Fábio(LPL)</td>
      <td>Fernando(Física)</td>
      <td>Fábio(LPL)</td>
      <td>Sano(LPMM)</td>
      <td>Gabriel(Matemática)</td>
    </tr>
    <tr>
      <th scope="row">13:50</th>
      <td>Ana Carolina(Biologia)</td>
      <td>Fernando(Física)</td>
      <td>Luis(P.D.T.C.C)</td>
      <td>Sano(LPMM)</td>
      <td>Fábio(LPL)</td>
    </tr>
    <tr>
      <th scope="row">14:40</th>
      <td>Gabriel(Matemática)</td>
      <td>Mayara(Química)</td>
      <td>Luis(P.D.T.C.C)</td>
      <td>Sano(LPMM)</td>
      <td>Ana Carolina(Biologia)</td>
    </tr>
  </tbody>

</table>
</div>
<br>
<h3>3B1 - Lado A</h3>
<br>
<div class="table-responsive">
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="row">Hora</th>
      <th scope="row">Segunda-feira</th>
      <th scope="row">Terça-feira</th>
      <th scope="row">Quarta-feira</th>
      <th scope="row">Quinta-feira</th>
      <th scope="row">Sexta-feira</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">07:10</th>
      <td>Danilo(DDM II)</td>
      <td>Fábio(LPL)</td>
      <td>Amanda(P.D.T.C.C)</td>
      <td>Mayara(Química)</td>
      <td>Vanessa(Geografia)</td>
    </tr>
    <tr>
      <th scope="row">08:00</th>
      <td>Danilo(DDM II)</td>
      <td>Fábio(LPL)</td>
      <td>Amanda(P.D.T.C.C)</td>
      <td>Mayara(Química)</td>
      <td>Vanessa(Geografia)</td>
    </tr>
    <tr>
      <th scope="row">08:50</th>
      <td>Mauro(SI)</td>
      <td>Fernando(Física)</td>
      <td>Amanda(P.D.T.C.C)</td>
      <td>Cristina(História)</td>
      <td>Gabriel(Matemática)</td>
    </tr>
  </tbody>

<thead class="thead">
    <tr>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10:00</th>
      <td>Mauro(SI)</td>
      <td>Fernando(Física)</td>
      <td>Tadeu(SW2)</td>
      <td>Cristina(História)</td>
      <td>Gabriel(Matemática)</td>
    </tr>
    <tr>
      <th scope="row">10:50</th>
      <td>Lucas(ACD)</td>
      <td>Alexandre(Inglês)</td>
      <td>Tadeu(SW2)</td>
      <td>Rosana(ECO)</td>
      <td>Ana Carolina(Biologia)</td>
    </tr>
    <tr>
      <th scope="row">11:40</th>
      <td>Lucas(ACD)</td>
      <td>Alexandre(Inglês)</td>
      <td>Tadeu(SW2)</td>
      <td>Rosana(ECO)</td>
      <td>Ana Carolina(Biologia)</td>
    </tr>


    </thead>
  </tbody>

</table>
</div>

<br>
<h3>3B1 - Lado B</h3>
<br>
<div class="table-responsive">
    <table  class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="row">Hora</th>
      <th scope="row">Segunda-feira</th>
      <th scope="row">Terça-feira</th>
      <th scope="row">Quarta-feira</th>
      <th scope="row">Quinta-feira</th>
      <th scope="row">Sexta-feira</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">07:10</th>
      <td>Lucas(SI)</td>
      <td>Fábio(LPL)</td>
      <td>Tadeu(SW2)</td>
      <td>Mayara(Química)</td>
      <td>Vanessa(Geografia)</td>
    </tr>
    <tr>
      <th scope="row">08:00</th>
      <td>Lucas(SI)</td>
      <td>Fábio(LPL)</td>
      <td>Tadeu(SW2)</td>
      <td>Mayara(Química)</td>
      <td>Vanessa(Geografia)</td>
    </tr>
    <tr>
      <th scope="row">08:50</th>
      <td>Danilo(DDM II)</td>
      <td>Fernando(Física)</td>
      <td>Tadeu(SW2)</td>  
      <td>Cristina(História)</td>
      <td>Gabriel(Matemática)</td>
    </tr>
  </tbody>

<thead class="thead">
    <tr>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
      <th scope="row">Intervalo(9:40)</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10:00</th>
      <td>Danilo(DDM II)</td>
      <td>Fernando(Física)</td>
      <td>Amanda(P.D.T.C.C)</td>
      <td>Cristina(História)</td>
      <td>Gabriel(Matemática)</td>
    </tr>
    <tr>
      <th scope="row">10:50</th>
      <td>Amanda(ACD)</td>
      <td>Alexandre(Inglês)</td>
      <td>Amanda(P.D.T.C.C)</td>
      <td>Rosana(ECO)</td>
      <td>Ana Carolina(Biologia)</td>
    </tr>
    <tr>
      <th scope="row">11:40</th>
      <td>Amanda(ACD)</td>
      <td>Alexandre(Inglês)</td>
      <td>Amanda(P.D.T.C.C)</td>
      <td>Rosana(ECO)</td>
      <td>Ana Carolina(Biologia)</td>
    </tr>


    </thead>
  </tbody>

</table>
</div>

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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="navbar.js"></script>
</html>