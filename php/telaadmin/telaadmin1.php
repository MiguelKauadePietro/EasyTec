<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tela Administrador</title>
</head>

<body>
    <?php
    include_once("validaradm.php");
    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="telaadmin.php">ADM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="telaadmin.php">Ativar Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="telaadmin1.php">Desativar Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="telaadmin2.php">Promover Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="telaadmin3.php">Rebaixar Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logoutadm.php">Sair</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                    </ul>
                </div>
            </div>
        </nav>
        <div class="table-responsive">
            <div class="table table-bordered">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">RM</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Função</th>
                            <th scope="col">Ativar/Desativar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //Conexão com o Banco de Dados
                        include_once("conexao.php");

                        //Comando SQL para buscar os usuários inativos
                        $stmt = "select * from usuarios where tipo = 's' and id <> " . $_SESSION['usuario_id'] . ";";

                        //Executando o comando SQL
                        $resultado = mysqli_query($conn, $stmt);

                        //Verificando se from encontrado resultados
                        if (mysqli_num_rows($resultado) > 0) {
                            while ($usuario = mysqli_fetch_assoc($resultado)) {
                                echo
                                '<tr>
        <th scope="row">' . $usuario['RM'] . '</th>
        <td>' . $usuario['Nome'] . '</td>
        <td>' . $usuario['tipo'] . '</td>
        <td>' . $usuario['funcao'] . '</td>
        <td>
          <a class="btn btn-danger" href="mudarstatus.php?id=' . $usuario['id'] . '&tipo=n">Desativar</a>
       
      </td>
      </tr>';
                            }
                        } else {
                            echo "<tr><td colspan = '5'>Nenhum usuários ativo encontrado</td></tr>";
                        }



                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <!-- Desativar Professores -->
        <h1>Desativar Professores</h1>

        <div class="table-responsive">
            <div class="table table-bordered">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">RA</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Função</th>
                            <th scope="col">Promover/Rebaixar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //Conexão com o Banco de Dados
                        include_once("conexao.php");

                        //Comando SQL para buscar os usuários inativos
                        $stmt = "select * from professores where tipo = 's' and id <> " . $_SESSION['usuario_id'] . ";";

                        //Executando o comando SQL
                        $resultado = mysqli_query($conn, $stmt);

                        //Verificando se from encontrado resultados
                        if (mysqli_num_rows($resultado) > 0) {
                            while ($usuario = mysqli_fetch_assoc($resultado)) {
                                echo
                                '<tr>
                                    <th scope="row">' . $usuario['RA'] . '</th>
                                    <td>' . $usuario['Nome'] . '</td>
                                    <td>' . $usuario['tipo'] . '</td>
                                    <td>' . $usuario['funcao'] . '</td>
                                    <td>
                                    <a class="btn btn-danger" href="mudarstatus.php?id=' . $usuario['id'] . '&tipo=n">Desativar</a>
                                </td>
                                </tr>';
                            }
                        } else {
                            echo "<tr><td colspan = '5'>Nenhum professor ativo encontrado</td></tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Desativar Professores -->

        <br>

        <!-- Desativar Funcionários -->
        <h1>Desativar Funcionários</h1>

        <div class="table-responsive">
            <div class="table table-bordered">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Função</th>
                            <th scope="col">Promover/Rebaixar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //Conexão com o Banco de Dados
                        include_once("conexao.php");

                        //Comando SQL para buscar os usuários inativos
                        $stmt = "select * from funcionarios where tipo = 's' and id <> " . $_SESSION['usuario_id'] . ";";

                        //Executando o comando SQL
                        $resultado = mysqli_query($conn, $stmt);

                        //Verificando se from encontrado resultados
                        if (mysqli_num_rows($resultado) > 0) {
                            while ($usuario = mysqli_fetch_assoc($resultado)) {
                                echo
                                '<tr>
                                    <th scope="row">' . $usuario['Email'] . '</th>
                                    <td>' . $usuario['Nome'] . '</td>
                                    <td>' . $usuario['tipo'] . '</td>
                                    <td>' . $usuario['funcao'] . '</td>
                                    <td>
                                    <a class="btn btn-danger" href="mudarstatus.php?id=' . $usuario['id'] . '&tipo=n">Desativar</a>

                                    </td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan = '5'>Nenhum professor ativo encontrado</td></tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Desativar Funcionários -->

        <br>

        <!-- Desativar Tercerizados -->
        <h1>Desativar Tercerizados</h1>

        <div class="table-responsive">
            <div class="table table-bordered">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">CPF</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Função</th>
                            <th scope="col">Promover/Rebaixar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //Conexão com o Banco de Dados
                        include_once("conexao.php");

                        //Comando SQL para buscar os usuários inativos
                        $stmt = "select * from tercerizados where tipo = 's' and id <> " . $_SESSION['usuario_id'] . ";";

                        //Executando o comando SQL
                        $resultado = mysqli_query($conn, $stmt);

                        //Verificando se from encontrado resultados
                        if (mysqli_num_rows($resultado) > 0) {
                            while ($usuario = mysqli_fetch_assoc($resultado)) {
                                echo
                                '<tr>
                                    <th scope="row">' . $usuario['CPF'] . '</th>
                                    <td>' . $usuario['Nome'] . '</td>
                                    <td>' . $usuario['tipo'] . '</td>
                                    <td>' . $usuario['funcao'] . '</td>
                                    <td>
                                    <a class="btn btn-danger" href="mudarstatus.php?id=' . $usuario['id'] . '&tipo=n">Desativar</a>

                                    </td>
                                    </tr>';
                            }
                        } else {
                            echo "<tr><td colspan = '5'>Nenhum professor ativo encontrado</td></tr>";
                        }

                        //Fechando o BD
                        mysqli_Close($conn);

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Desativar Tercerizados -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>