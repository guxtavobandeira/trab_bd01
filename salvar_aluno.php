<?php
include 'conexao.php';

	$nome_aluno = $_POST['nome_aluno'];
	$cod_aluno = $_POST['cod_aluno'];
	$curso_aluno = $_POST['curso_aluno'];
	$sexo_aluno = $_POST['sexo_aluno'];
	$serie = $_POST['serie'];
	$livro_aluno = $_POST['livro_aluno'];

	$sql = mysqli_query($conexaoBD, "INSERT INTO aluno(nome_aluno, cod_aluno, curso_aluno, sexo_aluno, serie, livro_aluno) 
	VALUES ('$nome_aluno', '$cod_aluno', '$curso_aluno', '$sexo_aluno', '$serie', '$livro_aluno')");
	
	if ($sql) {
		header('location: aluno.php');
	}
?>
