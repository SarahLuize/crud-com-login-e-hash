<?php
require_once("conexao.php");

$id = $_GET['id'];

$resultado = mysqli_query($conexao, "SELECT * FROM usuario WHERE idUsuario = $id");

$dadosUsuario = mysqli_fetch_assoc($resultado);

$nome = $dadosUsuario['nome'];
$email = $dadosUsuario['email'];
$senha = $dadosUsuario['senha'];
?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Gerenciador de Tarefas | Editar</title>
    </head>

    <body>
        <div class="retangulo">
            <h2 class="centralizar">Editar dados</h2>
        
            <p class="centralizar">
                <a href="paginaPrincipal.php">Voltar</a>
            </p>

            <form action="processaEdicao.php" method="POST" name="edit">
                <table>
                    <tr>
                        <td>Nome de usuario</td>
                        <td><input type="text" name="nomeEditar" value="<?php echo $nome; ?>"></td>
                    </tr>
                    <tr>
                        <td>E-Mail</td>
                        <td><input type="text" name="emailEditar" value="<?php echo $email; ?>"></td>
                    </tr>
                    <tr>
                        <td>Senha</td>
                        <td><input type="password" name="senhaEditar" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirmar senha</td>
                        <td><input type="password" name="confirmarSenhaEditar" value=""></td>
                    </tr>
                        <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="editar-submit" value="Editar">
                    </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>