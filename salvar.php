<?php
include 'conexao.php';

$nome_aluno = $_POST['nome_aluno'];
$curso_aluno = $_POST['curso_aluno'];
$sexo_aluno = $_POST['sexo_aluno'];
$serie = $_POST['serie'];
$livro_aluno = $_POST['livro_aluno'];


$nome_bib = $_POST['nome_bib'];
$livro_bib = $_POST['livro_bib'];


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$data_entrega = $_POST['data_entrega'];
$data_dev = $_POST['data_dev'];	

if (mysqli_query($conexaoBD, "INSERT INTO aluno(nome_aluno, curso_aluno, sexo_aluno, serie, livro_aluno)
VALUES ('$nome_aluno', '$curso_aluno', '$sexo_aluno', '$serie', '$livro_aluno')")){
    $id1 = mysqli_insert_id($conexaoBD);
}
if (mysqli_query($conexaoBD, "INSERT INTO bibliotecaria(nome_bib, livro_bib) 
VALUES ('$nome_bib', '$livro_bib')")){
	$id2 = mysqli_insert_id($conexaoBD);
}
if (mysqli_query($conexaoBD, "INSERT INTO livro(titulo, autor, data_entrega, data_dev) 
VALUES ('$titulo', '$autor', '$data_entrega', '$data_dev')")){
	$id3 = mysqli_insert_id($conexaoBD);
}
$sql1 = mysqli_query($conexaoBD, "INSERT INTO aluno_bibli(fk_aluno_cod_aluno,fk_bibliotecaria_cod_bib ) VALUES ('$id1','$id2')");
$sql2 = mysqli_query($conexaoBD, "INSERT INTO aluno_livro(fk_livro_cod_livro,fk_aluno_cod_aluno) VALUES ('$id3','$id1')");
$sql3 = mysqli_query($conexaoBD, "INSERT INTO livro_bibli(fk_livro_cod_livro,fk_bibliotecaria_cod_bib) VALUES ('$id3','$id2')");
header('location: cadastro.php');
?>
