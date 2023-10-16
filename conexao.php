<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$nomeDoBanco = "trabalho";

	$conexaoBD = mysqli_connect($servidor, $usuario, $senha, $nomeDoBanco);
 	if (!$conexaoBD) {
		echo "Não conectou com o Banco de Dados";
	}else{
		echo "Conectado!!";
	}

	
?>
