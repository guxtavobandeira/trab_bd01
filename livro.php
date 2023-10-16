<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
		<h1>Formulário Cadastro - PHP com MySql</h1>
		<form method="post" action="salvar_livro.php">
            
        TITULO<input type="text" name="titulo">
		<br>
		AUTOR<input type="text" name="autor">
		<br>
		CODIGO<input type="text" name="cod_livro">
		<br>
		DATA DA ENTREGA<input type="text" name="data_entrega">
		<br>
		DATA DA DEVOLUÇÃO<input type="text" name="data_dev">	

		<br>
		<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
		<button style="height: 50px; width: 100px;" onclick="window.open('http://127.0.0.1:5500/proj.html')">link</button>
</body>
</html>
