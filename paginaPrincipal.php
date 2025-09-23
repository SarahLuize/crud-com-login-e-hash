<?php
require_once("conexao.php");
$resultado = mysqli_query($conexao, "SELECT * FROM usuario ORDER BY idUsuario DESC");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gerenciador de Tarefas | Início</title>
</head>

<body>
    <div class="retangulo">
        <a href="index.php">Voltar a página principal</a>

        <h3 class="centralizar">Gerenciador de Tarefas</h3>
        
        <p class="centralizar">Site em construção</p>&nbsp;&nbsp;

        <p class="centralizar"><strong>Lista de usuários cadastrados</strong></p>

        <table class="centralizar-tabela width80">
            <tr class="detalhe">
                <td><strong>Nome</strong></td>
                <td><strong>Email</strong></td>
                <td><strong>Senha</strong></td>
            </tr>
            <?php
            while ($res = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $res['nome'] . "</td>";
                echo "<td>" . $res['email'] . "</td>";
                echo "<td><a href=\"editarUsuario.php?id=$res[idUsuario]\">Editar</a> &nbsp; | &nbsp; 
                        <a href=\"excluirUsuario.php?id=$res[idUsuario]\" onClick=\"return confirm('Tem certeza de que quer deletar a conta?')\">Deletar</a></td>";
                echo "</tr>";
            }
            ?>

        </table>
    </div>
</body>
</html>