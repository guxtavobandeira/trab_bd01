<?php
include 'conexao.php';

	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$data_entrega = $_POST['data_entrega'];
	$data_dev = $_POST['data_dev'];	

	$sql = mysqli_query($conexaoBD, "INSERT INTO livro(titulo, autor, data_entrega, data_dev) 
	VALUES ('$titulo', '$autor', '$data_entrega', '$data_dev')");
	
    //$sql2 = mysqli_query($conexaoBD, "INSERT INTO livro_bibli(fk_livro_cod_livro) 
	//VALUES ('$cod_livro')");
	if ($sql) {
		header('location: livro.php');
	}
?>
