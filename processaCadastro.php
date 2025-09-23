<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar</title>
</head>

<body>
    <div class="retangulo">
        <?php
        require_once("conexao.php");

        if (isset($_POST['submit'])) {
            $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
            $email = mysqli_real_escape_string($conexao, $_POST['email']);
            $senha = $_POST['senha'];
            $confirmarSenha = mysqli_real_escape_string($conexao, $_POST['confirmarSenha']);

            if ($senha !== $confirmarSenha) {
                echo "<p><font color='red'>Senhas não coincidem.</font></p><br/>";
                echo "<p class=\"centralizar\"><a href=\"index.php\">Inicio</a></p>";
                exit;
            }

            if (empty($nome) || empty($email) || empty($senha)) {
                if (empty($nome)) {
                    echo "<p class=\"centralizar mensagem\"><font color='red'>Campo nome está vazio.</font></p><br/>";
                    echo "<p class=\"centralizar\"><a href=\"index.php\">Inicio</a></p>";
                }

                if (empty($email)) {
                    echo "<p class=\"centralizar mensagem\"><font color='red'>Campo e-mail está vazio.</font></p><br/>";
                    echo "<p class=\"centralizar\"><a href=\"index.php\">Inicio</a></p>";
                }

                if (empty($senha)) {
                    echo "<p class=\"centralizar mensagem\"><font color='red'>Campo senha está vazio.</font></p><br/>";
                    echo "<p class=\"centralizar\"><a href=\"index.php\">Inicio</a></p>";
                }
            }
            // Transforma em Hash
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            // Adiciona dados no banco de dados
            $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senhaHash')";
            $resultado = mysqli_query($conexao, $sql);

            if ($resultado) {
                echo "<p class=\"centralizar mensagem\"><font color='green'>Conta cadastrada com sucesso!</p>";
                echo "<p class=\"centralizar\"><a href=\"index.php\">Fazer login</a></p>";
            } else {
                echo "<p class=\"centralizar mensagem\"><font color='red'>Erro ao cadastrar conta.</p>";
            }
        }
        ?>
    </div>
</body>

</html>