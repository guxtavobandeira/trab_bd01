<?php
include 'conexao.php';

	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$cod_livro = $_POST['cod_livro'];
	$data_entrega = $_POST['data_entrega'];
	$data_dev = $_POST['data_dev'];	

	$sql = mysqli_query($conexaoBD, "INSERT INTO livro(titulo, autor, cod_livro, data_entrega, data_dev) 
	VALUES ('$titulo', '$autor', '$cod_livro', '$data_entrega', '$data_dev')");
	
	if ($sql) {
		header('location: livro.php');
	}
?>
