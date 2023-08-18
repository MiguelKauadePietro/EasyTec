<?php
require_once('conexaologin.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $RM = $_POST['RM'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, nome, senha FROM usuarios WHERE RM = '$RM'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado && mysqli_num_rows($resultado) === 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        if (password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido
            session_start();
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header('Location: dashboard.php');
            exit();
        } else {
            $erro = "Senha incorreta";
        }
    } else {
        $erro = "RM não encontrado";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../login/imagens/EASYTEC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href=".../../../../login/login.css">
    
    <title>Login</title>
</head>
<body>   
    <main id="container">
        <form id="login_form" method = "post" action = "login.php">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <!-- INPUTS -->
            <div id="inputs">
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="RM">
                        RM
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" inputmode="numeric" pattern="[0-9]*" id="RM" name="RM" required>
                        </div>
                    </label>
                </div>

                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="password" name="senha" required>
                        </div>
                    </label>

                    <!-- FORGOT PASSWORD -->
                    <div id="forgot_password">
                        <a href="#">
                            Esqueceu a senha?
                        </a>
                    </div>
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit" id="login_button">
                Login
            </button>
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src=".../../../../login/login.js"></script>
</body>
</html>