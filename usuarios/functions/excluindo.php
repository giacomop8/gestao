<?php
include("../../conexao.php");

$id_cliente = $_GET["idexc"];
$sql = "DELETE FROM clientes WHERE id_cliente=$id_cliente";

mysqli_query($conexao, $sql);

header('Location: http://localhost/projetos/gestao/clientes.php');
?>