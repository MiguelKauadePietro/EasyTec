<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../CSS/cadastro.css">

    <title>Cadastro</title>
</head>

<body>
    <main id="container">
    <!-- <i id="mode_icone2" class="fa-solid fa-moon"></i> -->
        <form id="login_form" method="post" action="index.php">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Cadastro</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>
            <?php

            //requerindo a conexao com o BD
            require_once('conexao.php');


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if(!empty($_POST['Nome'])) {
                $nome = $_POST['Nome'];
                $RM = $_POST['RM'];
                $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                $funcao = $_POST['funcao'];
                
                //inserindo os campos
                $sql = "INSERT INTO usuarios VALUES (null, '$nome', '$RM', '$senha','n','$funcao')";
                
                //verificando os dados no banco
                if (mysqli_query($conexao, $sql)) {
                    echo "Cadastro realizado com sucesso!";


                } else {
                    echo "Erro ao cadastrar: " . mysqli_error($conexao);
                }
            }
            }
            ?>
            <!-- INPUTS -->
            <div id="inputs">
                <!-- Nome -->
                <div class="input-box">
                    <label for="Nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="Nome" required>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="RM">
                        RM
                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="text" inputmode="numeric" pattern="[0-9]*" id="RM" name="RM" required>
                        </div>
                    </label>
                </div>

                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="senha" required>
                        </div>
                    </label>
                </div>

                <a id="linkcadastro" href="../loginphp/login.php">Já possui uma conta?</a>

            </div>

            

            <select name="funcao">
                <option value="alu">Aluno</option>
                <option value="pro">Professor</option>
                <option value="fun">Funcionário</option>
                <option value="ter">Terceirizado</option>
            </select>

            

            <!-- LOGIN BUTTON -->
            <button type="submit" id="login_button">
                Cadastrar
            </button>
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="cadastro.js"></script>
</body>

</html>