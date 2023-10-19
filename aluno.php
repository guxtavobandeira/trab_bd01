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
<div class="container" style="text-align: center; margin-top: 100px; height: 420px; width: 550px; border: 2px solid black; border-radius: 10px;">
    <form method="post" alction="salvar02.php" style=""> <br>
        <h1>TEXTO</h1>
        <br>
        <div class="row">
            <div class="col-sm">
                <label for="exampleInputNome">NOME :</label>
        		<input type="email" class="form-control" id="exampleInputNome" aria-describedby="emailHelp" placeholder="" name="nome_aluno">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <label for="exampleInputnomem">CODIGO :</label>
                <input class="form-control" id="exampleInputnomem" placeholder="" name="cod_aluno">
            </div>
            <div class="col-sm">
                <label for="exampleInputnomem">CURSO :</label>
                <input class="form-control" id="exampleInputnomem" placeholder="" name="curso_aluno">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <label for="exampleInputnomem">SEXO :</label>
                <input class="form-control" id="exampleInputnomem" placeholder="" name="sexo_aluno">
            </div>
            <div class="col-sm">
                <label for="exampleInputnomem">SERIE :</label>
                <input class="form-control" id="exampleInputnomem" placeholder="" name="serie">
            </div>
			<div class="col-sm">
                <label for="exampleInputnomem">LIVRO :</label>
                <input class="form-control" id="exampleInputnomem" placeholder="" name="livro_aluno">
            </div>
		</div>
		<br>
		<div class="row">
            <div class="text-center">
                <label for="exampleInputc"></label>
                <button type="submit" class=" form btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" placeholder="">Salvar</button>
                <label for="exampleInputc"></label>
                <button type="submit" class=" form btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" placeholder="" onclick="window.open('http://127.0.0.1:5500/proj.html')">Voltar</button>
            </div>
        </div>

    </form>
    </div>
	<br>
<br>
<br>
<br>
</body>
</html>
