<?php
include 'conexao.php';

	$nome_bib = $_POST['nome_bib'];
	$livro_bib = $_POST['livro_bib'];

    $sql = mysqli_query($conexaoBD, "INSERT INTO bibliotecaria(nome_bib, livro_bib) 
	VALUES ('$nome_bib', '$livro_bib')");
	

   // $sql2 = mysqli_query($conexaoBD, "INSERT INTO aluno_bibli(fk_bibliotecaria_cod_bib) 
    //VALUES ('$cod_bib')");
	
	if ($sql) {
		header('location: bibliotecaria.php');
	}
?>
