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

        // Verifica se o formulário de edição foi enviado
        if (isset($_POST['editar-submit'])) {
            $id = mysqli_real_escape_string($conexao, $_POST['id']);
            $nome = mysqli_real_escape_string($conexao, $_POST['nomeEditar']);
            $email = mysqli_real_escape_string($conexao, $_POST['emailEditar']);
            $senha = $_POST['senhaEditar'];
            $confirmarSenha = $_POST['confirmarSenhaEditar'];

            if (empty($nome) || empty($email)) {
                echo "<p class=\"centralizar mensagem\"><font color='red'>Preencha todos os campos obrigatórios.</font></p><br/>";
                echo "<p class=\"centralizar\"><a href=\"editarUsuario.php?id=$id\">Editar novamente</a></p>";
                exit;
            }

            if (!empty($senha)) {
                if ($senha !== $confirmarSenha) {
                    echo "<p class=\"centralizar mensagem\"><font color='red'>As senhas não coincidem.</font></p><br/>";
                    echo "<p class=\"centralizar\"><a href=\"editarUsuario.php?id=$id\">Editar novamente</a></p>";
                    exit;
                }
                // Atualiza senha
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                // Atualiza dados no banco de dados
                $sql = "UPDATE usuario SET nome='$nome', email='$email', senha='$senhaHash' WHERE idUsuario = $id";
            } else {
                // Senha em branco irá atualizar apenas nome e e-mail
                $sql = "UPDATE usuario SET nome='$nome', email='$email' WHERE idUsuario = $id";
            }

            // Executa uma consulta no banco de dados
            mysqli_query($conexao, $sql);
            echo "<p class=\"centralizar mensagem\"><font color='green'>Dados atualizados com sucesso!</font></p>";
            echo "<p class=\"centralizar\"><a href=\"paginaPrincipal.php\">Voltar</a></p>";
        }
        ?>
    </div>
</body>
</html>