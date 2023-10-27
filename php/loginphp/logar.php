<?php
                require_once('conexaologin.php');

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $RM = $_POST['RM'];
                    $senha = $_POST['senha'];
                    $sql = "SELECT * FROM usuarios WHERE RM = '$RM'";
                    $resultado = mysqli_query($conexao, $sql);

                    if ($resultado && mysqli_num_rows($resultado) === 1) {
                        $usuario = mysqli_fetch_assoc($resultado);
                        if ($usuario['tipo']=="s"){
                            if (password_verify($senha, $usuario['senha'])) {
                                // Login bem-sucedido
                                session_start();
                                $_SESSION['usuario_id'] = $usuario['id'];
                                $_SESSION['usuario_Nome'] = $usuario['Nome'];
                                if ($usuario['funcao'] == "adm") {
                                    $_SESSION['funcao'] = "adm";
                                    header("location:../telaadmin/telaadmin.php");
                                } elseif ($usuario['funcao'] == "alu") {
                                    $_SESSION['funcao'] = "alu";
                                    header("location:dashboard.php");
                                } elseif ($usuario['funcao'] == "pro") {
                                    $_SESSION['funcao'] = "pro";
                                    header("location:pagprof.php"); //colocar a página do professor
                                } elseif ($usuario['funcao'] == "fun") {
                                    $_SESSION['funcao'] = "fun";
                                    header("location:pagfun.php");
                                } elseif ($usuario['funcao'] == "ter") {
                                    $_SESSION['funcao'] = "ter";
                                    header("location:pagter.php");
                                }
                                exit();
                            } else {
                                $erro = "Senha incorreta";
                            }
                        }else{
                            $erro = "Seu usuário não está ativo, procure o administrador";
                        }    
                    } else {
                        $erro = "Usuário não encontrado";
                    }
                }

                   // Se houver erros, redirecione para a página de login com a mensagem de erro
                    if ($erro) {
                        header("location: login.php?erro=" . $erro);
                    }
                ?>