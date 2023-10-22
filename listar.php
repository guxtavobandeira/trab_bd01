<?php
	include 'conexao.php';
	$listarSQL = mysqli_query($conexaoBD, "SELECT * FROM aluno");
    
    $sql = mysqli_query($conexaoBD,"SELECT * FROM aluno WHERE curso_aluno = 'Enfermagem'");

    $sql02 = mysqli_query($conexaoBD,"SELECT * FROM aluno WHERE curso_aluno = 'Informática'");

    $sql03 = mysqli_query($conexaoBD,"SELECT * FROM aluno WHERE curso_aluno = 'Comércio'");

    $sql04 = mysqli_query($conexaoBD,"SELECT * FROM aluno WHERE curso_aluno = 'Administração'");

    $sql05 = mysqli_query($conexaoBD,"SELECT * FROM aluno WHERE sexo_aluno = 'Masculino'");
    
    $sql06 = mysqli_query($conexaoBD,"SELECT * FROM aluno WHERE sexo_aluno = 'Feminino'");

    $sql07 = mysqli_query($conexaoBD,"SELECT * FROM aluno WHERE serie = '1'");

    $sql08 = mysqli_query($conexaoBD,"SELECT * FROM bibliotecaria WHERE nome_bib = 'Aureni'");

    $sql09 = mysqli_query($conexaoBD,"SELECT * FROM livro WHERE autor = 'Manoel Gomes'");
?>
