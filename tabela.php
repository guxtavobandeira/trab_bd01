
<?php
include 'listar.php';
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
			<thead>
				<h1>TABELA COM DADOS DE TODOS OS ALUNOS</h1>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Curso</th>
					<th scope="col">Livro</th>
				</tr>
			</thead>
			<?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>
			<tbody>
				<tr>
					<td><?php echo $usuario['nome_aluno']; ?></td>
					<td><?php echo $usuario['curso_aluno']; ?></td>
					<td><?php echo $usuario['livro_aluno']; ?></td>
				</tr>

			</tbody>
			<?php } ?>
		</table>
	</div>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE ALUNOS QUE CURSAM ENFERMAGEM</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Curso</th>
					</tr>
				</thead>
		<?php while ($result = mysqli_fetch_assoc($sql)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result['nome_aluno']; ?></td>
					<td><?php echo $result['curso_aluno']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE ALUNOS QUE CURSAM INFORMÁTICA</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Curso</th>
					</tr>
				</thead>
		<?php while ($result02 = mysqli_fetch_assoc($sql02)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result02['nome_aluno']; ?></td>
					<td><?php echo $result02['curso_aluno']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE ALUNOS QUE CURSAM COMÉRCIO</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Curso</th>
					</tr>
				</thead>
		<?php while ($result03 = mysqli_fetch_assoc($sql03)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result03['nome_aluno']; ?></td>
					<td><?php echo $result03['curso_aluno']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE ALUNOS QUE CURSAM ADMINISTRAÇÃO</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Curso</th>
					</tr>
				</thead>
		<?php while ($result04 = mysqli_fetch_assoc($sql04)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result04['nome_aluno']; ?></td>
					<td><?php echo $result04['curso_aluno']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE ALUNOS COM GÊNERO MASCULINO</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Sexo</th>
					</tr>
				</thead>
		<?php while ($result05 = mysqli_fetch_assoc($sql05)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result05['nome_aluno']; ?></td>
					<td><?php echo $result05['sexo_aluno']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE ALUNOS COM GÊNERO FEMININO</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Sexo</th>
					</tr>
				</thead>
		<?php while ($result06 = mysqli_fetch_assoc($sql06)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result06['nome_aluno']; ?></td>
					<td><?php echo $result06['sexo_aluno']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE ALUNOS QUE ESTUDAM NA 1° SÉRIE</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Série</th>
					</tr>
				</thead>
		<?php while ($result07 = mysqli_fetch_assoc($sql07)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result07['nome_aluno']; ?></td>
					<td><?php echo $result07['serie']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE LIVROS CADASTRADOS POR AURENI</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Código do Livro</th>
						<th scope="col">Livro</th>
					</tr>
				</thead>
		<?php while ($result08 = mysqli_fetch_assoc($sql08)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result08['nome_bib']; ?></td>
					<td><?php echo $result08['cod_bib']; ?></td>
					<td><?php echo $result08['livro_bib']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
	<br><br><br>
	<section>
		<div class="container col-md-6 offset-md-3">
			<table class="table table-hover">
				<thead>
					<h1>TABELA DE LIVROS ESCRITOS POR MANOEL GOMES</h1>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Código do Livro</th>
						<th scope="col">Livro</th>
					</tr>
				</thead>
		<?php while ($result09 = mysqli_fetch_assoc($sql09)) { ?>
			<tbody>
				<tr>
					<td><?php echo $result09['autor']; ?></td>
					<td><?php echo $result09['cod_livro']; ?></td>
					<td><?php echo $result09['titulo']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</section>
</body>
</html>
