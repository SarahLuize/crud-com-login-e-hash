<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Processar edição</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="retangulo">

        <?php
        require_once("conexao.php");
        session_start();

        if (isset($_POST['login-submit'])) {
            $nome = mysqli_real_escape_string($conexao, $_POST['nomeLogin']);
            $senhaDigitada = $_POST['senhaLogin'];

            // Prepara a consulta
            $consultaUsuario = $conexao->prepare("SELECT idUsuario, senha FROM usuario WHERE nome = ?");
            $consultaUsuario->bind_param("s", $nome);
            $consultaUsuario->execute();

            // Pega o resultado
            $result = $consultaUsuario->get_result();

            if ($result->num_rows > 0) {
                $usuario = $result->fetch_assoc();

                // Verifica a senha com o hash
                if (password_verify($senhaDigitada, $usuario['senha'])) {
                    $_SESSION['id'] = $usuario['idUsuario'];
                    $_SESSION['nome'] = $nome;

                    header("Location: paginaPrincipal.php");
                    exit;
                } else {
                    echo "<p class=\"centralizar mensagem\"><font color='red'>Senha incorreta.</font></p><br/>";
                    echo "<p class=\"centralizar\"><a href=\"index.php\">Voltar</a></p>";
                }
            } else {
                echo "<p class=\"centralizar mensagem\"><font color='red'>Usuário não encontrado.</font></p><br/>";
                echo "<p class=\"centralizar\"><a href=\"index.php\">Voltar</a></p>";
            }
        }
        ?>
    </div>
</body>

</html>