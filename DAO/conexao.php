<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "processoseletivo";

$con = new mysqli($servidor, $usuario, $senha, $banco);

if($con->connect_error)
{
	die("Erro de conexao " . $con->connect_error);
}

?>
