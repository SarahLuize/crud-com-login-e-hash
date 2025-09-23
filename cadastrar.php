<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gerenciador de Tarefas | Fazer cadastro</title>

</head>
<body>
    <div class="retangulo">
        <h2 class="centralizar">Fazer cadastro</h2>

        <p class="centralizar">Já tem uma conta?
            <a href="index.php">Faça login</a>
        </p>

        <form action="processaCadastro.php" method="POST" name="cadastro">
            <table class="width25">
                <tr>
                    <td>Nome de usuário</td>
                    <td><input type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="senha"></td>
                </tr>
                <tr>
                    <td>Confirmar senha</td>
                    <td><input type="password" name="confirmarSenha"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Cadastrar" class="centralizar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>