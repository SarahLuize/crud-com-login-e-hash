<?php
require_once("conexao.php");
$result = mysqli_query($conexao, "SELECT * FROM usuario ORDER BY idUsuario DESC");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <div class="retangulo">
        <h2 class="centralizar">Gerenciador de Tarefas</h2>

        <p class="centralizar">Breve texto sobre o gerenciador de tarefas</p>
        <p class="centralizar">(Texto temporário)</p>&nbsp;

        <p class="centralizar"><strong>Não tem uma conta?</strong>
            <a href="cadastrar.php">Faça cadastro</a>
        </p>

        &nbsp;&nbsp;
        
        <!--Login-->
        <form action="processaLogin.php" method="POST" name="login">
            <table class="width80">
                <tr>
                    <td>Nome de usuário</td>
                    <td><input type="text" name="nomeLogin"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="senhaLogin"></td>
                </tr>
                <tr>
                    <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" name="login-submit" value="Login" class="centralizar">
                </td>
                </tr>
            </table>
        </form>

    </div>
</body>
</html>