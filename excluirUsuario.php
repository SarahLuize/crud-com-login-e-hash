<?php

require_once("conexao.php");

$id = $_GET['id'];

$resultado = mysqli_query($conexao, "DELETE FROM usuario WHERE idUsuario  = $id");

header("Location:paginaPrincipal.php");

?>