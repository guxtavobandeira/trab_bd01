<?php
include 'conexao.php';

	$nome_bib = $_POST['nome_bib'];
	$cod_bib = $_POST['cod_bib'];
	$livro_bib = $_POST['livro_bib'];	

    $sql = mysqli_query($conexaoBD, "INSERT INTO bibliotecaria(nome_bib, cod_bib, livro_bib) 
	VALUES ('$nome_bib', '$cod_bib', '$livro_bib')");
	
	if ($sql) {
		header('location: blibiotecaria.php');
	}
?>
